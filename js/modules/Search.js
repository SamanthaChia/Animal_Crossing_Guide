import $ from 'jquery';

class Search {

    // describe and create/initiate our object
    constructor() {
        this.openButton =  $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.events();
    }

    // events aka listener
    events(){
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click",this.closeOverlay.bind(this));
        $(document).on("keyup", this.keyPressedFunction.bind(this));
    }

    //methods (function,action, etc)
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