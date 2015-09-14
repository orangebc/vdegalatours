var map;
$(document).ready(function(){
    map = new GMaps({
        div: '#map',
        lat: 19.436505,
        lng: -99.185695,
        scrollwheel: false
    });

    map.addMarker({
        lat: 19.436505,
        lng: -99.185695
    });
});
