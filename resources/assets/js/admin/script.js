$(document).ready(function(){
    "use strict";
    /**
     * Detect IE
     */
    Tukecx.isIE(function(){
        /**
         * Callback
         */
    });

    /**
     * Add csrf token to ajax request
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    /**
     * Handle select media box
     */
    Tukecx.handleSelectMediaBox();

    Tukecx.tabChangeUrl();

    /**
     * Init layout
     */
    Tukecx.initAjax();
});

$(window).load(function () {
    "use strict";
    /*Hide loading state*/
    Tukecx.hideLoading();
});
