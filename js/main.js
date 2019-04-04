// rozwijalne menu w navbarze vvvvv
$('.dropdown').on('show.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

$('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});
// rozwijalne menu w navbarze ^^^^^

//menu hamburgerowe VVVV
const ico_burger = document.querySelector(".navbar-toggler");
ico_burger.addEventListener("click", function () {
    ico_burger.classList.toggle("ico_active");
});
//menu hamburgerowe ^^^^
// strzałka w dół VVVV
$("#arrow_go_down").on("click", function () {
    $('html, body').animate({
        scrollTop: $('.karty').offset().top - 56
    }, 700);

});
// przezroczystość navbara VVVV
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > window.innerHeight * 0.5) {
            $('.bg-light').removeClass('bg_nav_change');
            $('.dropdown-menu').removeClass('bg_nav_change');
            $('#return-to-top').slideDown(500);
        } else {
            $('.bg-light').addClass('bg_nav_change');
            $('.dropdown-menu').addClass('bg_nav_change');
            $('#return-to-top').fadeOut(100);
        }
    });
});
$('#return-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});