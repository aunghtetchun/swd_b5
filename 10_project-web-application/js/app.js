$(".aside-menu-open").click(function () {

    $(".aside-menu").animate({marginLeft:"0"});
});
$(".aside-menu-close").click(function () {
    $(".aside-menu").animate({marginLeft:"-100%"});

});