$(document).ready(function () {

    //auto active
    let currentUrl = location.href;
    let urlArr = currentUrl.split("/");
    let currentPage = urlArr.pop();

    $(".nav-link").each(function () {
        let now = $(this).attr("href");
        if(now == currentPage){
            $(this).addClass("active");
        }
    })


    //nav mobile btn
    $(".navbar-toggler").click(function () {
        if($(this).hasClass("collapsed")){
            $(this).html(`<i class="fa fa-close"></i>`);

        }else{
            $(this).html(`<i class="fa fa-bars"></i>`);

        }
    });

    //nav on scroll
    $(window).scroll(function () {
        let x = $(window).scrollTop();
        console.log(x);
        if(x > 250){

            if(!$("#nav").hasClass('bg-dark')){
                $("#nav").addClass("bg-dark");
                $("#nav").addClass("custom");
                $("#nav .navbar").removeClass("mt-md-5");
                $("#nav").hide(0,function () {
                    $(this).show();
                });
            }

        }else{
            $("#nav .navbar").addClass("mt-md-5");
            $("#nav").removeClass("bg-dark");
            $("#nav").removeClass("custom");

        }
    });

    $(".to-play").click(function () {
        $(".modal").modal("show");
    });


})