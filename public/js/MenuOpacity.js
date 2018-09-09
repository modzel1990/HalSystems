
    $(window).scroll(function() {
     if($(this).scrollTop() > 70)
      {
       $('.navbar').addClass('op');
       $('.imglogo').addClass('op');
       $('.imglogo').addClass('imglogoscroll');
      }else{
        $('.navbar').removeClass('op');
        $('.imglogo').removeClass('op');
        $('.imglogo').removeClass('imglogoscroll');
    }
});
