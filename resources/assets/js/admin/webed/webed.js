var Tukecx = Tukecx || {};

Tukecx.scrollToTop = function (event) {
    "use strict";
    if (event) {
        event.preventDefault();
    }
    $('html, body').stop().animate({
        scrollTop: 0
    }, 800);
};

Tukecx.showLoading = function () {
    $('body').addClass('on-loading');
};

Tukecx.hideLoading = function () {
    $('body').removeClass('on-loading');
};

Tukecx.initAjax = function () {
    "use strict";
    Tukecx.confirmation();
    Tukecx.tagsInput();
    Tukecx.slimScroll($('.scroller'));
};
