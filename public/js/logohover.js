$(document).ready(function () { 
    $('.imglogo').hover(
       function() { 
           $(this).attr('src', '/images/llogo.png');
       }
    );
    $('.navbar').hover(
        function() { 
            $('img.imglogo').attr('src', '/images/llogo.png');
        }
     );
    $('.imglogo').mouseleave(
        function() { 
            if($(document).scrollTop() <= 70) {
            $('img.imglogo').attr('src', '/images/llogo.png');
            } else {
            $('img.imglogo').attr('src', '/images/llogo.png');
             }
        }
    );
    $('.navbar').mouseleave(
        function() { 
            if($(document).scrollTop() <= 70) {
            $('img.imglogo').attr('src', '/images/llogo.png');
            } else {
            $('img.imglogo').attr('src', '/images/llogo.png');
             }
        }
    );
});