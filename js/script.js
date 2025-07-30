/*============================= Preloader Vanilla Java Script ========================*/
document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#preloader").style.visibility = "visible";
  } else {
    document.querySelector("#preloader").style.display = "none";
    document.querySelector("body").style.visibility = "visible";
  }
};

/*============================= Nav Bar Fixed Top Vanilla Java Script ========================*/
window.addEventListener('scroll', function () {
  var menubar = document.querySelector("#mainNav");
  menubar.classList.toggle("fixed-top", window.scrollY > 10);
});
 
/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/*============================= Bootstrap Tooltip Activation Script ========================*/
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"], .hasTooltip'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl, {
    html: true
  });
});
 
(function ($) {

  // Main Header Nav links Active Class Genaretor
  $("#link__list li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).addClass("active");
  $("#sideNavLinks li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).addClass("active");

 
  // Service Card Slider Activaton Script (Homepage)
  $(".textCarousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true, 
    smartSpeed: 350,
    responsiveClass: true, 
    autoplaySpeed: 2000, 
    items: 1,
    nav: false,
    dots:false,
    autoplayHoverPause: true, 
  });
   
   

  // Branding Designs Slider Activaton Script (Homepage)
  $(".brandingDesignsSlider").owlCarousel({
    items: 3,
    autoplay:true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true, 
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000, 
    autoplaySpeed: 3000, 
    loop: true,
    margin: 10,  
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 2 },
        1200: { items: 3 }
    },
  });

  // Testimonial Slider Activaton Script (Homepage)
  $(".clientSlider").owlCarousel({
    items: 1,
    autoplay:true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true, 
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000, 
    autoplaySpeed: 3000, 
    loop: true,
    margin: 10,  
    nav: false,
    dots: true, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 2 },
        576: { items: 3 },
        768: { items: 4 },
        992: { items: 5 },
        1200: { items: 6 }
    },
  });

   



})(jQuery);

 


$(document).ready(function(){
  $('.projectItem').magnificPopup({
      type: 'image',
      mainClass: 'mfp-with-zoom', 
      gallery:{ enabled:true
        },
    
      zoom: {
        enabled: true,  
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function 
        opener: function(openerElement) { 
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      } 
  });
  
});