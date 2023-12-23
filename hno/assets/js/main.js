


$(document).ready(function(){

  // For Owl Carousel ..............................................
  $(".owl-carousel").owlCarousel({
    items: 1,
    center: true,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    animateOut: 'fadeOut',
  });


  // For Multilevel Dropdown Menu ........................................
  jQuery('.stellarnav').stellarNav({
    theme: 'dark',
    breakpoint: 1199,
    // breakpoint: 900,
    // position: 'right',
    // phoneBtn: '18009997788',
    // locationBtn: 'https://www.google.com/maps'
  });


  // For Cookies ...........................................................
  $("#cookies_part button").click(function(){
    $("#cookies_part").addClass("cookies_hide")
    Cookies.set('hno_cookies_name', 'hno_cookies_value', { expires: 365 });      
  });

  if( Cookies.set('hno_cookies_name') == undefined){
    $("#cookies_part").show();
  }




  // For sticky top all page without home page ..................................

  var windowsize = $(window).width(); //For get window width.


  if (windowsize > 1183) {
    $(window).scroll(function() {
      var header = $(document).scrollTop();
      var headerHeight = $("#main_menu").outerHeight();
      if (header > headerHeight) {
        $("#main_menu").addClass("fixed");
      } else {
        $("#main_menu").removeClass("fixed");
      }
    });
  }


  // For sticky top only for home page ........................................

  
  if (windowsize > 1183) {
    window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("home_page_main_menu");
    var sticky = navbar.offsetTop;
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  }











}); // Close the document ready function





















