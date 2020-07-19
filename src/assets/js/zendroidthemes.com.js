import $ from 'jquery';
import sal from './lib/sal.js'; //REMOVE THIS FROM DISTRIBUTION, ONLY REQ'D FOR DEMO COVER PAGE
import slick from './lib/slickslider.js';


window.$ = $;



// We need to add a button to close the mailchimp signup alert box as otherwise it just sits there
// after the user interaction
$(document).ajaxComplete(function() {
  // Find the alert element
  var $mc4p_alert = $('.mc4wp-alert');
  // Create the button with relevant classes
  var closeButton = $('button.close-alert');
  // Append the button to the alert
  $mc4p_alert.append(closeButton);
  // Attach an event handler
  closeButton.click(function() {
    $mc4p_alert.fadeOut('slow', function() {
    });
  })
});


$(document).ajaxError(function() {
    // Find the alert element
  var $mc4p_alert = $('.mc4wp-alert');
  // Create the button with relevant classes
  var closeButton = $('i.close-alert');
  // Append the button to the alert
  // $mc4p_alert.append(closeButton);
  // Attach an event handler
  closeButton.click(function() {
    $mc4p_alert.fadeOut('slow', function() {
    });
  })
});


// Let's change Mailchimp signup form to use AJAX JSON instead of full page refresh
        $(document).ready(function () {
            var $form = $('#mc-embedded-subscribe-form')
            if ($form.length > 0) {
                $('form input[type="submit"]').bind('click', function (event) {
                    if (event) event.preventDefault()
                    register($form)
                })
            }
        })

        function register($form) {
            $('#mc-embedded-subscribe').val('Sending...');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                error: function (err) { alert('Could not connect to the registration server. Please try again later.') },
                success: function (data) {
                    $('#mc-embedded-subscribe').val('subscribe')
                    if (data.result === 'success') {
                        // Yeahhhh Success
                        console.log(data.msg)
                        $('#mce-EMAIL').css('borderColor', '#ffffff')
                        $('.mc4wp-alert').removeClass('mc4wp-alert-error').css('backgroundColor', '#555')
                        $('.mc4wp-alert').show().html('<p>Thanks for subscribing! Check your inbox for a confirmation.<button class="close-alert"><i class="fas fa-window-close fa-2x"></i></button></p>')
                        $('#mce-EMAIL').val('')
                    } else {
                        // Something went wrong, do something to notify the user.
                        console.log(data.msg)
                        $('#mce-EMAIL').css('borderColor', '#b24592')
                        $('.mc4wp-alert').addClass('mc4wp-alert-error').show().css('backgroundColor','#b24592').html('<p>' + data.msg + '</p><button class="fas fa-2x fa-window-close close-alert"></button>')

                    }
                }
            })
        };



// $("#mc4wp-form-1").submit(function(e) {
 
//     var url = $(this).prop('action'); // the script where you handle the form input.
//     $.ajax({
//            type: "GET",
//            url: url,
//            data: jQuery("#mc-embedded-subscribe-form").serialize(), // serializes the form's elements.
//            dataType: "jsonp",
//            success: function(data)
//            {
//                 if(data.result == 'success') window.location.href = 'https://example.yourdomain.com/thank-you.html';
//            }
//          });
 
//     e.preventDefault(); // avoid to execute the actual submit of the form.
// });




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
