console.log('%c Coleen built this shit ;)', 'background: #ffb7a8; color: #fff; font-size: 40px;');

$('[data-scroll-to]').on('click', function(event) {
    event.preventDefault();
    var target = $('#' + $(this).data('scroll-to'));

    console.log(target);
    $('html, body').stop().animate({
        scrollTop: target.offset().top
    }, 1000);
});

$(window).scroll(function(){

    $('section').each(function(){

        var currentSection = $(this);

        var topofDiv = currentSection.offset().top;
        var height = currentSection.outerHeight();

        if($(window).scrollTop() > (topofDiv - 400) && $(window).scrollTop() < (topofDiv + height)){
           currentSection.addClass('show');
        }
        else{
           currentSection.removeClass('show');
        }

    });

});