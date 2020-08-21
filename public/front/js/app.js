$(function () {
    $(".page-load-outer").css("display", "flex");
    $("header").css("display", "none");
    $(".slider").css("display", "none");
    $(".content").css("display", "none");
    $("footer").css("display", "none");

    setTimeout(() => {
        $(".page-load-outer").css("display", "none");
        $("header").css("display", "block");
        $(".content").css("display", "block");
        $(".slider").css("display", "block");
        $("footer").css("display", "block");
    }, 750);

    $(".responsive-menu .responsive-menu-icon i").click(() => {
        $(".responsive-menu-content").toggleClass("class");
        $("header").toggleClass("header-class");
        $(".responsive-menu-content").slideDown(500);
    });

    $(".responsive-menu .responsive-menu-content-close i").click(() => {
        $(".responsive-menu-content").slideUp(500);
    })

});
