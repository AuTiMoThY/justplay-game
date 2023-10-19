/**
 * ---------------------------------------------------------------------------------
 * >> .init()
 */

init() {
    const _ = this;
    $("body").addClass('js-loading-ok');
    _.scrolling();


    if (mqUp.lg.matches) {
        console.log("qwe");
        $("body").removeClass("js-open-mobile-menu");
    }
    // $(window).on('resize', function () {
    // });
},