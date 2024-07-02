$(document).ready(function () {
    $('.bcs-service-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false, // Disable default arrows
        infinite: true,
    });

    // Custom buttons
    $('.bcs-prev-btn').click(function () {
        $('.bcs-service-slider').slick('slickPrev');
    });

    $('.bcs-next-btn').click(function () {
        $('.bcs-service-slider').slick('slickNext');
    });
});

$(document).ready(function () {
    $('.bcs-review-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
    });
});