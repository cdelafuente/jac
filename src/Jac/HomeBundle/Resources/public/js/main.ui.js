$(function() {
    // Center vertically the company name.
    var padding = ($('#main-navigation').height() - $('#main-navigation h2').height()) / 2;
    $('#main-navigation h2').css({
        'padding-top': padding + 'px',
        'padding-bottom': padding + 'px'
    });
    
    // Center horizontally main logo.
    var margin = ($('#main-navigation h2').width() - $('header h1').width()) / 2;
    $('header h1').css({
        'margin-left': margin + 'px',
        'margin-right': margin + 'px'
    });
    
    $('#languages > a span').css({
        'left': ($('#languages > a').width() - $('#languages a span').width()) / 2 + 'px',
        'top': ($('#languages > a').height() - $('#languages a span').height()) / 2 + 'px'
    });
});