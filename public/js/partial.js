$(".hidden-travel-tours__container").hide();

$(".travel-tours__item").click(function(){
    $(".hidden-travel-tours__container").slideUp();
    $('#' + $(this).attr('data-info')).slideDown();
});

$(".close-pane").on('click', function(){
    $(".hidden-travel-tours__container").slideUp();
});

$(".hidden-circuit__container").hide();

$(".circuits__item").click(function(){
    $(".hidden-circuit__container").slideUp();
    $('#' + $(this).attr('data-info')).slideDown();
});

$(".close-circuit").on('click', function(){
    $(".hidden-circuit__container").slideUp();
});
