import $ from 'jquery';

class Search {

    // describe and create/initiate our object
    constructor() {
        this.addSearchHTML();
        this.resultsDiv = $("#search-overlay__results");
        this.openButton =  $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.events();
        this.isLoadingVisible = false;
        this.previousValue;
        this.timer;
    }

    // events aka listener
    events(){
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click",this.closeOverlay.bind(this));
        this.searchField.on("keyup",this.searchtermLogic.bind(this));
        $(document).on("keyup", this.keyPressedFunction.bind(this));
    }

    //methods (function,action, etc)
    searchtermLogic(){
        if(this.searchField.val() != this.previousValue) {
            clearTimeout(this.timer);
        if(this.searchField.val() ){
            if(!this.isLoadingVisible){
                this.resultsDiv.html('<div class="isabelle-loading"></div>');
                this.isLoadingVisible = true;
            }
            this.timer = setTimeout(this.getSearchResults.bind(this),750);
            } else{
                this.resultsDiv.html('');
                this.isLoadingVisible = false;
            }            
        }
        this.previousValue = this.searchField.val();
    }

    getSearchResults(){
        //will run asynchronously
        $.when(
        $.getJSON(animalCrossingData.root_url + '/wp-json/wp/v2/posts?search='+ this.searchField.val()),
        $.getJSON(animalCrossingData.root_url + '/wp-json/wp/v2/pages?search='+ this.searchField.val()) 
        ).then((posts, pages) => {
            var combinedResults = posts[0].concat(pages[0]);    
            this.resultsDiv.html(`
                <h2 class="search-overlay__section-title">Look! We Found Something!</h2>
                ${combinedResults.length ? '<ul class="link-list min-list">' : '<p style="text-align:center;">Ah.. Nevermind its nothing. Try another keyword?</p>'}
                ${combinedResults.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
                ${combinedResults.length ? '</ul>' : `<div class="div-isabelle-worried"><img class="isabelle-worried" src="${animalCrossingData.root_url}/wp-content/themes/Animal_Crossing_Guide/images/isabelle-noresults.gif"></div>` }
            `);
            this.isLoadingVisible =false;
        },
        //when users have network error or something mess up the url to get the json.
         () => {
            this.resultsDiv.html(`<p style="text-align:center;">Oh No! There was an expected error, contact us for support !</p>
            <div class="div-isabelle-worried"><img class="isabelle-worried" src="${animalCrossingData.root_url}/wp-content/themes/Animal_Crossing_Guide/images/isabelle-noresults.gif"></div>`);
        });
    }

    openOverlay(){
        this.searchOverlay.addClass("search-overlay--active");
        setTimeout( () => this.searchField.focus() ,350);
        $("body").addClass("body-no-scroll");
    }

    closeOverlay(){
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
        this.searchField.val('');
        this.resultsDiv.html('');
    }

    keyPressedFunction(key){
        if(key.keyCode == 83 && !$("input","textarea").is(':focus')){
            this.openOverlay();
        }
        else if(key.keyCode ==27){
            this.closeOverlay();
        }
    }

    addSearchHTML(){
        $("body").append(`
        <div class="search-overlay">
            <div clas="search-overlay__top">
                    <div class="container">
                    <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                    <input type="text" class="search-term" placeholder="Looking for something? Let Isabelle help!" id="search-term">
                    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
                    </div>
            </div>
            <div class="container">
                <div id="search-overlay__results">
                
                </div>
            </div>

        </div>
        `);
    }

}

export default Search;