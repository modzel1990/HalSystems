$(window).scroll(function () { 
    if($(document).scrollTop() <= 70) {
        $('.imglogo').attr('src', "/images/llogo.png");
    } else {
        $('.imglogo').attr('src', "/images/llogo.png");
    }
});