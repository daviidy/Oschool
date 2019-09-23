$(document).ready(() => {
    $('.homepage-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        prevArrow: '<button type="button" class="slick-prev"><</button>' ,
        nextArrow: '<button type="button" class="slick-next">></button>',
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });
    
})
