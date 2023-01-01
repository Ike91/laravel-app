$(document).ready(function () {

    // ------------------------------------------------------- //
    // Custom Scrollbar
    // ------------------------------------------------------ //

    if ($(window).outerWidth() > 992) {
        $("nav.side-navbar").mCustomScrollbar({
            scrollInertia: 200
        });
    }

    // Main Template Color
    var brandPrimary = '#33b35a';

    // ------------------------------------------------------- //
    // Side Navbar Functionality
    // ------------------------------------------------------ //
    $('#toggle-btn').on('click', function (e) {

        e.preventDefault();

        if ($(window).outerWidth() > 1194) {
            $('nav.side-navbar').toggleClass('shrink');
            $('.page').toggleClass('active');
        } else {
            $('nav.side-navbar').toggleClass('show-sm');
            $('.page').toggleClass('active-sm');
        }
    });

    // ------------------------------------------------------- //
    // Tooltips init
    // ------------------------------------------------------ //    

    $('[data-toggle="tooltip"]').tooltip()

    // ------------------------------------------------------- //
    // Universal Form Validation
    // ------------------------------------------------------ //

    $('.form-validate').each(function() {  
        $(this).validate({
            errorElement: "div",
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            ignore: ':hidden:not(.summernote),.note-editable.card-block',
            errorPlacement: function (error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                //console.log(element);
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.siblings("label"));
                } 
                else {
                    error.insertAfter(element);
                }
            }
        });
    });
    // ------------------------------------------------------- //
    // Material Inputs
    // ------------------------------------------------------ //

    var materialInputs = $('input.input-material');

    // activate labels for prefilled values
    materialInputs.filter(function () {
        return $(this).val() !== "";
    }).siblings('.label-material').addClass('active');

    // move label on focus
    materialInputs.on('focus', function () {
        $(this).siblings('.label-material').addClass('active');
    });

    // remove/keep label on blur
    materialInputs.on('blur', function () {
        $(this).siblings('.label-material').removeClass('active');

        if ($(this).val() !== '') {
            $(this).siblings('.label-material').addClass('active');
        } else {
            $(this).siblings('.label-material').removeClass('active');
        }
    });

    // ------------------------------------------------------- //
    // Jquery Progress Circle
    // ------------------------------------------------------ //
    var progress_circle = $("#progress-circle").gmpc({
        color: brandPrimary,
        line_width: 5,
        percent: 80
    });
    progress_circle.gmpc('animate', 80, 3000);

    // ------------------------------------------------------- //
    // External links to new window
    // ------------------------------------------------------ //

    $('.external').on('click', function (e) {

        e.preventDefault();
        window.open($(this).attr("href"));
    });

    // ------------------------------------------------------ //
    // For demo purposes, can be deleted
    // ------------------------------------------------------ //

    var stylesheet = $('link#theme-stylesheet');
    $("<link id='new-stylesheet' rel='stylesheet'>").insertAfter(stylesheet);
    var alternateColour = $('link#new-stylesheet');

    if ($.cookie("theme_csspath")) {
        alternateColour.attr("href", $.cookie("theme_csspath"));
    }

    $("#colour").change(function () {

        if ($(this).val() !== '') {

            var theme_csspath = 'css/style.' + $(this).val() + '.css';

            alternateColour.attr("href", theme_csspath);

            $.cookie("theme_csspath", theme_csspath, {
                expires: 365,
                path: document.URL.substr(0, document.URL.lastIndexOf('/'))
            });

        }

        return false;
    });

});


!(function($) {
    "use strict";
  
    // Toggle .header-scrolled class to #header when page is scrolled
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
      } else {
        $('#header').removeClass('header-scrolled');
      }
    });
  
    if ($(window).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    }
  
    // Smooth scroll for the navigation menu and links with .scrollto classes
    $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
  
          var scrollto = target.offset().top;
          var scrolled = 20;
  
          if ($('#header').length) {
            scrollto -= $('#header').outerHeight()
  
            if (!$('#header').hasClass('header-scrolled')) {
              scrollto += scrolled;
            }
          }
  
          if ($(this).attr("href") == '#header') {
            scrollto = 0;
          }
  
          $('html, body').animate({
            scrollTop: scrollto
          }, 1500, 'easeInOutExpo');
  
          if ($(this).parents('.nav-menu, .mobile-nav').length) {
            $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            $(this).closest('li').addClass('active');
          }
  
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('bx-menu bx-x');
            $('.mobile-nav-overly').fadeOut();
          }
          return false;
        }
      }
    });
  
    // Mobile Navigation
    if ($('.nav-menu').length) {
      var $mobile_nav = $('.nav-menu').clone().prop({
        class: 'mobile-nav d-lg-none'
      });
      $('body').append($mobile_nav);
      $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="bx bx-menu"></i></button>');
      $('body').append('<div class="mobile-nav-overly"></div>');
  
      $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('bx-menu bx-x');
        $('.mobile-nav-overly').toggle();
      });
  
      $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
      });
  
      $(document).click(function(e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('bx-menu bx-x');
            $('.mobile-nav-overly').fadeOut();
          }
        }
      });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
      $(".mobile-nav, .mobile-nav-toggle").hide();
    }
  
    // Intro carousel
    var heroCarousel = $("#heroCarousel");
  
    heroCarousel.on('slid.bs.carousel', function(e) {
      $(this).find('h2').addClass('animate__animated animate__fadeInDown');
      $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');
    });
    // Back to top button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
  
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  
    // Initiate the venobox plugin
    $(window).on('load', function() {
      $('.venobox').venobox();
    });
  
    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
      delay: 10,
      time: 1000
    });
  
    // Skills section
    $('.skills-content').waypoint(function() {
      $('.progress .progress-bar').each(function() {
        $(this).css("width", $(this).attr("aria-valuenow") + '%');
      });
    }, {
      offset: '80%'
    });
  
    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
      autoplay: true,
      dots: true,
      loop: true,
      items: 1
    });
  
    // Porfolio isotope and filter
    $(window).on('load', function() {
      var portfolioIsotope = $('.portfolio-container').isotope({
        layoutMode: 'fitRows'
      });
  
      $('#portfolio-flters li').on('click', function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');
  
        portfolioIsotope.isotope({
          filter: $(this).data('filter')
        });
        aos_init();
      });
  
    });
  
    // Portfolio details carousel
    $(".portfolio-details-carousel").owlCarousel({
      autoplay: true,
      dots: true,
      loop: true,
      items: 1
    });
  
    // Initi AOS
    function aos_init() {
      AOS.init({
        duration: 1000,
        once: true
      });
    }
    $(window).on('load', function() {
      aos_init();
    });
  
  })(jQuery);
  
  //Form fuctionality
  function myFunction(value)
  {
    if(value=="Email")
    { 
  
       var classes = {Email: "fa-envelope", Phone: "fa-phone", WhatsApp: "fa-whatsapp", Zoom: "fa-video"};
      $("#socialIcon i").attr("class","");
      $("#socialIcon i").addClass("fa").addClass(classes[value]);
  
      // $("#socialIcon1 i").attr("class","");
      // $("#socialIcon1 i").addClass("fa").addClass(classes[Phone]);
  
      document.getElementById("myText").placeholder = "Enter Your email";
      document.getElementById("myText2").placeholder = "Enter your phone number";
      document.getElementById("label").innerHTML= "Email";
      document.getElementById("label1").innerHTML= "Phone";
      document.getElementById("formOfContact").style.display = 'block';
      document.getElementById("otherContact").style.display = 'block';
      document.getElementById("venue").style.display = 'block';
  
    }else if(value=="Phone")
    {
      var classes = {Email: "fa-envelop", Phone: "fa-phone", WhatsApp: "fa-whatsapp", Zoom: "fa-video"};
      
      $("#socialIcon i").attr("class","");
      $("#socialIcon i").addClass("fa").addClass(classes[value]);
  
      $("#socialIcon1 i").attr("class","");
      $("#socialIcon1 i").addClass("fa").addClass(classes[Email]);
  
      document.getElementById("myText").placeholder = "Enter Your Phone number";
      document.getElementById("myText2").placeholder = "Enter your email";
      document.getElementById("label").innerHTML = "Phone";
      document.getElementById("label1").innerHTML = "Email";
      document.getElementById("formOfContact").style.display = 'block';
      document.getElementById("otherContact").style.display = 'block';
      document.getElementById("venue").style.display = 'block';
  
    }else if(value=="Whatsapp")
    {
      var classes = {Email: "fa-envelop", Phone: "fa-phone", Whatsapp: "fa-comment-dots", Zoom: "fa-video"};
      $("#socialIcon i").attr("class","");
      $("#socialIcon i").addClass("fa").addClass(classes[value]);
  
      $("#socialIcon1 i").attr("class","");
      $("#socialIcon1 i").addClass("fa").addClass(classes[Email]);
  
      document.getElementById("myText").placeholder = "Enter Your whatsApp Phone number";
      document.getElementById("myText2").placeholder = "Enter Your email address";
      document.getElementById("label").innerHTML = "WhatsApp number";
      document.getElementById("label1").innerHTML = "Email";
      document.getElementById("formOfContact").style.display = 'block';
      document.getElementById("venue").style.display = 'block';
  
    }else if(value=="Zoom")
    {
      var classes = {Email: "fa-envelop-md", Phone: "fa-phone", WhatsApp: "fa-comments-dots", Zoom: "fa-video"};
      $("#socialIcon i").attr("class","");
      $("#socialIcon i").addClass("fa").addClass(classes[value]);
  
      document.getElementById("myText").placeholder = "Paste your Zoom invite link";
      document.getElementById("label").innerHTML = "Zoom link";
      document.getElementById("formOfContact").style.display = 'block';
      document.getElementById("venue").style.display = 'none';
  
    }else
    {
      document.getElementById("formOfContact").style.display = 'none';
      document.getElementById("venue").style.display = 'block';
    }
  }
  
  
  $(function()
  {
    $("#year").on("change",function()
    {
        var levelClass = $('#year').find('option:selected').attr('class');
        console.log(levelClass);
        $('#selectCourse option').each(function () 
        {
            var self = $(this);
            if (self.hasClass(levelClass) || typeof(levelClass) == "undefined") 
            {
                self.show();
            } else
             {
                self.hide();
            }
        });
    });
  });
  
  
  /***********
   * Table link
   */
  document.addEventListener("DOMContentLoaded", () =>
  {
     const row = document.querySelectorAll("tr[data-href]");
     row.forEach(row =>
      {
        row.addEventListener("click", ()=>
        {
          window.location.href = row.dataset.href;
        });
      });
  });
  
  function mFunction(value)
  {
    if(value=="Res")
    {
      document.getElementById("specify").innerHTML= "Specify your Res";
      document.getElementById("SpecifyVenue").style.display = 'block';
      document.getElementById("Yourv").placeholder = "Enter Your address";
  
    }else if(value=="Other")
    {
     
      document.getElementById("specify").innerHTML = "Your Other venue";
      document.getElementById("SpecifyVenue").style.display = 'block';
      document.getElementById("Yourv").placeholder = "Enter address";
  
    }else
    {
      document.getElementById("SpecifyVenue").style.display = 'none';
    }
  }
  
  //Sliker autoplay
  var $jq = jQuery.noConflict();
  $('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
  
  
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  
  ClassicEditor
      .create( document.querySelector( '#body' ), {
          toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
          heading: {
              options: [
                  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
              ]
          }
      } )
      .catch( error => {
          console.log( error );
      } );
          
  