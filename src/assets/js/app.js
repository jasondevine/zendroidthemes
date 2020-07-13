import $ from 'jquery';
import slick from './lib/slickslider.js';
import sal from './lib/sal.js'; //REMOVE THIS FROM DISTRIBUTION, ONLY REQ'D FOR DEMO COVER PAGE


window.$ = $;


$(document).ready(function() {
    $('.blog-layout-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 800,
      fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
    });
});

$(document).ready(function() {
    $('.blog-layout-slider-2').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 800,
      fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
    });
});

$(document).ready(function() {
    $('.post-layout-slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      autoplay: true,
      autoplaySpeed: 1800,
      speed: 650,
      // fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ],
    });
});


$(document).ready(function() {
    $('.header-layout-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1200,
      speed: 400,
      fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
    });
});


$(document).ready(function() {
    $('.sidebar-side-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      speed: 800,
      fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
    });
});

$(document).ready(function() {
    $('.social-features-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1200,
      speed: 400,
      fade: true,
      arrows: false,
      pauseOnHover: false,
      cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
    });
});


$(document).ready(function() {
    sal({
        // once: false,
    });
});
