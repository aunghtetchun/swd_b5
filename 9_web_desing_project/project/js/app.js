$('.counter-value').each(function(){
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    },{
        duration: 1000,
        easing: 'swing',
        step: function (now){
            $(this).text(Math.ceil(now));
        }
    });
});



$(".slick-control").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});
