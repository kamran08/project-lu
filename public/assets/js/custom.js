'use strict';

$(document).ready(function() {

    $(".click-review").on("click", function(){
        $(".modal-overlay").addClass("fade-in");
        $(".modal-full-content").addClass("modal-show");
    });

    $(".modal-header span i").on("click", function() {
        $(".modal-overlay").removeClass("fade-in");
        $(".modal-full-content").removeClass("modal-show");
    });

    $(".click-offer").on("click", function(){
        // $(".body-modal").addClass("body-modal-fixed");
        $(".main-modal-overlay").addClass("fade-in");
        $(".modal-full-content").addClass("modal-show");
    });

    $(".modal-header span i").on("click", function() {
        // $(".body-modal").removeClass("body-modal-fixed");
        $(".main-modal-overlay, .modal-overlay-2").removeClass("fade-in");
        $(".modal-full-content, .modal-full-content-2").removeClass("modal-show");
    });

    $(".freelancer-review").on("click", function(){
        // $(".body-modal").addClass("body-modal-fixed");
        $(".modal-overlay-2").addClass("fade-in");
        $(".modal-full-content-2").addClass("modal-show");
    });

    // Function for dashboard nav

    $(".toggleButtonProperty").click(function() {
        var $this = $(this);
        $this.toggleClass("toggle-collapsed");
        $(".sidebar-logo").toggleClass("sidebar-logo-tab");
    });

    // chhose file

    $('.chooseFile').click(function () {
        $('.chooseFileInput').click();
    });

    $('.chooseImage').click(function () {
        $('.chooseImageInput').click();
    });

    // $(document).on("click", function(e){
    //     if($(e.target).closest(".modal-full-content").length==0) {
    //         $("body").find(".modal-overlay, .modal-full-content").removeClass("fade-in, modal-show");
    //     }
    // });

    // client carousel



    $('.client-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {

            0:{
                items: 1
            },

            600:{
                items: 1
            },
            
            1000:{
                items: 1
            }
        }
    });

    // skill slider

    $('.skill-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<span><i class='fas fa-chevron-left'></i></span>",
            "<span><i class='fas fa-chevron-right'></i></span>"
        ],
        dots: false,
        responsive: {

            0:{
                items: 1
            },

            600:{
                items: 1
            },

            1000:{
                items: 3
            }
        }
    });

    // parallax carousel

    $('.parallax-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {

            0:{
                items: 1
            },

            600:{
                items: 1
            },
            
            1000:{
                items: 1
            }
        }
    });

    // parallax carousel

    $('.logo-slider').owlCarousel({
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {

            0:{
                items: 1
            },

            600:{
                items: 1
            },
            
            1000:{
                items: 7
            }
        }
    });

     // advertise carousel

    //  $('.advertise-slider').owlCarousel({
    //     autoplay:false,
    //     autoplayTimeout:1000,
    //     autoplayHoverPause:true,
    //     loop: true,
    //     margin: 10,
    //     nav: false,
    //     dots: true,
    //     responsive: {

    //         0:{
    //             items: 2
    //         },

    //         600:{
    //             items: 6
    //         },
            
    //         1000:{
    //             items: 9
    //         }
    //     }
    // });


    // Function for nav
    
    // Function for mobile menu

    $(".mobile-menu .main-nav-list").hide();
    $(".mobile-toggle").on("click", function() {
        $(".mobile-menu .main-nav-list").slideToggle();
    });

    // Function for category button

    $(".category-list").hide();
    $(".category-toggle-btn i").on("click", function(){
        $(".category-list").slideToggle();
    });

    // Function for dropdown 

    $(".nav-content li").click(function() {
        $(this).find("ul").toggleClass("dropdown-act");
    });

    // Function for mobile dropdown

    $(".mobile-nav-dropdown").hide();
    $(".mobile-open-container .nav-content li").on("click", function() {
        $(".mobile-nav-dropdown").slideToggle();
    });

    // v2 dropdown

    $(".auth-click-1").on("click", function() {
        $(".auth-active-dropdown.drp1").toggleClass("auth-active-show");
    });

    $(".auth-click-2").on("click", function() {
        $(".auth-active-dropdown.drp2").toggleClass("auth-active-show");
    });

    $(".auth-click-3").on("click", function() {
        $(".auth-active-dropdown.drp3").toggleClass("auth-active-show");
    });


    // fixed navbar

    $(document).on('scroll', function() {
        var scrollPos = $(this).scrollTop();

        if( scrollPos > 10 ) {
            $('.main-nav, .mobile-menu').addClass('navbar-home');
            $('.logo-1').addClass('logo-2');
        }

        else {
            $('.main-nav, .mobile-menu').removeClass('navbar-home');
            $('.logo-1').removeClass('logo-2');
        }
    });
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.nav-button')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active-faq");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

function readURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });
  