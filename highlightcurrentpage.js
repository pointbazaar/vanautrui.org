//source:
//https://stackoverflow.com/questions/26819675/navbar-highlight-for-current-page

$(function(){
    $('a').each(function(){
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('active');
            $(this).parents('li').addClass('active');
        }
    });
});
