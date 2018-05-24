$('[data-scroll-to]').on('click', function(event) {
    event.preventDefault();
    var target = $('#' + $(this).data('scroll-to'));

    console.log(target);
    $('html, body').stop().animate({
        scrollTop: target.offset().top
    }, 1000);
});