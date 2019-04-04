 $(window).scroll(function () {
     if ($(document).scrollTop() > 150) {
         $('.nav').addClass('affix');
         //  console.log("OK");
     } else {
         $('.nav').removeClass('affix');
     }
 });


 $('.navTrigger').click(function () {
     $(this).toggleClass('active');
     //  console.log("Clicked menu");
     $("#mainListDiv").toggleClass("show_list");
     $("#mainListDiv").fadeIn();

 });

 // Plan:
 // Create fixed navbar
 // Navbar appears only the user scrolls up

 var beforeScroll = 0;
 var afterScroll;
 var $navbar = $('.nav');




 // find current position
 $(window).on("scroll", function () {

     // Calculate updated scroll position
     afterScroll = $(this).scrollTop();

     // Compare before and after scroll

     // if scrolling is quick and less then -10
     if (beforeScroll < afterScroll) {
         // user is scrolling down
         $navbar.removeClass('slideDown').addClass('slideUp');
     } else if (beforeScroll > afterScroll) {
         // user is scrolling up
         $navbar.removeClass('slideUp').addClass('slideDown');
     }


     // Reset beforeScroll to afterScroll position

     beforeScroll = afterScroll;

 });