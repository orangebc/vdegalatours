var $video  = $('video'),
    $window = $(window);

$(window).resize(function(){
    var height = $window.height();
    $video.css('height', height);

    var width = $window.width();

    $video.css({
        'height': height,
        'width': width

    });
}).resize();
