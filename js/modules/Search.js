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
            this.timer = setTimeout(this.getSearchResults.bind(this),1000);
            } else{
                this.resultsDiv.html('');
                this.isLoadingVisible = false;
            }            
        }
        this.previousValue = this.searchField.val();
    }

    getSearchResults(){
        this.resultsDiv.html("Search results");
        this.isLoadingVisible = false;
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
        if(key.keyCode == 83 && !$("input","textarea").is(':focus')){
            this.openOverlay();
        }
        else if(key.keyCode ==27){
            this.closeOverlay();
        }
    }

}

export default Search;