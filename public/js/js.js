$(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $('.home-menu').addClass("sticky-nav");
        } else {
            $('.home-menu').removeClass("sticky-nav");
        }
    });

// window.onscroll = function() {myFunction()};

// var navbar = document.getElementById("navbar");
// var sticky = navbar.offsetTop;

// function myFunction() {
//     if (window.pageYOffset >= sticky) {
//         navbar.classList.add("sticky")
//     } else {
//         navbar.classList.remove("sticky");
//     }
// }

$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
// scroll body to 0px on click
$('#back-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 400);
    return false;
});
});





$('.owl-testimonial').owlCarousel({
    loop:false,
    rewind:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay:true,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
            nav:false
        },
        480:{
            items:1,
            nav:false
        },
        768:{
            items:1,
            nav:false
        },
        1024:{
            items:2,
            nav:false
        },
        1380:{
            items:2,
            nav:false
        },
        1580:{
            items:2,
            nav:false
        }
    }
})




$('.owl-partner').owlCarousel({
    loop:false,
    rewind:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay:true,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
            nav:false
        },
        480:{
            items:1,
            nav:false
        },
        768:{
            items:2,
            nav:false
        },
        1024:{
            items:6,
            nav:false
        },
        1380:{
            items:6,
            nav:false
        },
        1580:{
            items:6,
            nav:false
        }
    }
})


$('.accordion').find('.accordion-title').on('click', function() {
        $(this).toggleClass('active');
        $(this).next().slideToggle('fast');
        $('.accordion-content').not($(this).next()).slideUp('fast');
        $('.accordion-title').not($(this)).removeClass('active');
    });