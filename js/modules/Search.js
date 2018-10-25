import $ from 'jquery';

class Search {

    // describe and create/initiate our object
    constructor() {
        this.resultsDiv = $("#search-overlay__results");
        this.openButton =  $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.events();
        this.timer;
    }

    // events aka listener
    events(){
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click",this.closeOverlay.bind(this));
        this.searchField.on("keydown",this.searchtermLogic.bind(this));
        $(document).on("keyup", this.keyPressedFunction.bind(this));
    }

    //methods (function,action, etc)
    searchtermLogic(){
        clearTimeout(this.timer);
        this.resultsDiv.html('<div class="isabelle-loading"><img src="/images/isabelle-loading.gif" width="200" height="200"></div>');
        this.timer = setTimeout(this.getSearchResults.bind(this),1000);
    }

    getSearchResults(){
        this.resultsDiv.html("Search results");
    }

    openOverlay(){
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
    }

    closeOverlay(){
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
    }

    keyPressedFunction(key){
        if(key.keyCode == 83){
            this.openOverlay();
        }
        else if(key.keyCode ==27){
            this.closeOverlay();
        }
    }

}

export default Search;