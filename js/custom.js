$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0:{
                items:1,
            },
            768:{
                items:1,
            },
            1000: {
                items: 2
            }
        }
    })
});
$(document).ready(function () {
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
});