var map;
$(document).ready(function(){
    map = new GMaps({
        div: '#travel-map',
        lat: 23.6266557,
        lng: -102.5377501,
        scrollwheel: false,
        zoom: 5,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    });

    map.addMarker({
        lat: 19.3907336,
        lng: -99.1436127,
        title: 'Estado de México, Distrito Federal',
        icon: 'images/como-viajar/ub1.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#one").toggle("slowDown");
        },
        infoWindow: {
          content: 'Estado de México'
        }
    });

    map.addMarker({
        lat: 19.3164703,
        lng: -98.1669188,
        title: 'Tlaxcala',
        icon: 'images/como-viajar/ub1.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#one").toggle("slowDown");
        },
        infoWindow: {
          content: 'Tlaxcala'
        }
    });

    map.addMarker({
        lat: 17.6018995,
        lng: -100.0958137,
        title: 'Guerrero',
        icon: 'images/como-viajar/ub1.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#one").toggle("slowDown");
        },
        infoWindow: {
          content: 'Guerrero'
        }
    });

    //Mundo Maya
    map.addMarker({
        lat: 16.2574821,
        lng: -92.2546849,
        title: 'Chiapas',
        icon: 'images/como-viajar/ub2.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#two").toggle("slowDown");
        },
        infoWindow: {
          content: 'Chiapas'
        }
    });

    map.addMarker({
        lat: 20.5876916,
        lng: -88.9700704,
        title: 'Yucatán',
        icon: 'images/como-viajar/ub2.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#two").toggle("slowDown");
        },
        infoWindow: {
          content: 'Yucatán'
        }
    });

    map.addMarker({
        lat: 19.7408033,
        lng: -88.0035665,
        title: 'Quintana Roo',
        icon: 'images/como-viajar/ub2.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#two").toggle("slowDown");
        },
        infoWindow: {
          content: 'Quintana Roo'
        }
    });

    map.addMarker({
        lat: 19.3305991,
        lng: -90.7947859,
        title: 'Campeche',
        icon: 'images/como-viajar/ub2.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#two").toggle("slowDown");
        },
        infoWindow: {
          content: 'Campeche'
        }
    });

    map.addMarker({
        lat: 17.9505964,
        lng: -92.5587422,
        title: 'Tabasco',
        icon: 'images/como-viajar/ub2.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#two").toggle("slowDown");
        },
        infoWindow: {
          content: 'Tabasco'
        }
    });

    // Ruta de los Dioses

    map.addMarker({
        lat: 19.3504358,
        lng: -97.8975886,
        title: 'Puebla',
        icon: 'images/como-viajar/ub3.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#three").toggle("slowDown");
        },
        infoWindow: {
          content: 'Puebla'
        }
    });

    map.addMarker({
        lat: 19.8043579,
        lng: -96.1447432,
        title: 'Veracruz',
        icon: 'images/como-viajar/ub3.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#three").toggle("slowDown");
        },
        infoWindow: {
          content: 'Veracruz'
        }
    });

    map.addMarker({
        lat: 17.163454,
        lng: -96.210067,
        title: 'Oaxaca',
        icon: 'images/como-viajar/ub3.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#three").toggle("slowDown");
        },
        infoWindow: {
          content: 'Oaxaca'
        }
    });

    // Tesoros Coloniales

    map.addMarker({
        lat: 22.0463792,
        lng: -102.4701415,
        title: 'Aguascalientes',
        icon: 'images/como-viajar/ub4.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#four").toggle("slowDown");
        },
        infoWindow: {
          content: 'Aguascalientes'
        }
    });

    map.addMarker({
        lat: 20.8760833,
        lng: -100.8841675,
        title: 'Guanajuato',
        icon: 'images/como-viajar/ub4.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#four").toggle("slowDown");
        },
        infoWindow: {
          content: 'Guanajuato'
        }
    });

    map.addMarker({
        lat: 19.154732,
        lng: -101.90058,
        title: 'Michoacán',
        icon: 'images/como-viajar/ub4.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#four").toggle("slowDown");
        },
        infoWindow: {
          content: 'Michoacán'
        }
    });

    map.addMarker({
        lat: 20.8425118,
        lng: -99.8198078,
        title: 'Querétaro',
        icon: 'images/como-viajar/ub4.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#four").toggle("slowDown");
        },
        infoWindow: {
          content: 'Querétaro'
        }
    });

    map.addMarker({
        lat: 23.0835524,
        lng: -102.5479286,
        title: 'Zacatecas',
        icon: 'images/como-viajar/ub4.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#four").toggle("slowDown");
        },
        infoWindow: {
          content: 'Zacatecas'
        }
    });

    // Jalisco

    map.addMarker({
        lat: 20.8380589,
        lng: -103.6026693,
        title: 'Jalisco',
        icon: 'images/como-viajar/ub5.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#five").toggle("slowDown");
        },
        infoWindow: {
          content: 'Jalisco'
        }
    });

    // México Norte

    map.addMarker({
        lat: 25.4362195,
        lng: -112.3135795,
        title: 'Baja California Sur',
        icon: 'images/como-viajar/ub6.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#six").toggle("slowDown");
        },
        infoWindow: {
          content: 'Baja California Sur'
        }
    });

    map.addMarker({
        lat: 28.6716648,
        lng: -106.1908273,
        title: 'Chihuahua',
        icon: 'images/como-viajar/ub6.png',
        click: function(e) {
            $(".hidden-travel-tours__container").hide();
            $("#six").toggle("slowDown");
        },
        infoWindow: {
          content: 'Chihuahua'
        }
    });

});
