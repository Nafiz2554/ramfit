var mainNavbar = $('.main-header-bar');
var navPos = document.documentElement.offsetTop;
var accBtn = document.getElementsByClassName('navAccBtn');
var accBtnDrop = document.getElementsByClassName('navAccBtnDrop');
if (document.body.classList.contains('logged-in')) {
    for (let item of accBtnDrop) {
      item.classList.remove('d-none');
    }
    for (let item of accBtn) {
      item.classList.add('d-none');
    }
} else {
    for (let item of accBtnDrop) {
      item.classList.add('d-none');
    }
    for (let item of accBtn) {
      item.classList.remove('d-none');
    }
}

// On document ready func
$(function() {
    var topHH = 0;
    $('.ast-above-header-wrap').each(function() {
        topHH = Math.max(topHH, $(this).outerHeight(true));
    });
    navPos = navPos + topHH;

    $('.ast-mobile-header-content').each(function() {
        $(this).appendTo($('#ast-mobile-header').find('.main-header-bar'));
    });
});

// Window on scroll func
window.onscroll = function() {    
    // console.log(window.pageYOffset);
    // console.log(navPos);
    if (window.pageYOffset >= navPos) {
        mainNavbar.each(function () {
           $(this).addClass('main-header-bar-sticky-top'); 
        });
        if (document.documentElement.offsetTop > 0) {
            $('.main-header-bar-sticky-top').each(function () {
                $(this).css('top', document.documentElement.offsetTop + 'px');
            });
        }
    } else {
        if (document.documentElement.offsetTop > 0) {
            $('.main-header-bar-sticky-top').each(function () {
                $(this).css('top', '0px');
            });
        }
        mainNavbar.each(function () {
           $(this).removeClass('main-header-bar-sticky-top'); 
        });
    }
}