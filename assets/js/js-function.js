/**
 * Created by Stanimir on 16.3.2017 г..
 */

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: false,
        navContainer: false,
        navContainerClass: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });
    jQuery('.owl-prev').html('');
    jQuery('.owl-next').html('');
});

$(document).ready(function() {
    $('#country').change(function() {
        var current = $('#country').val();
        if (current != 'null') {
            $('#country').css('color','black');
        } else {
            $('#country').css('color','#B5A6B0');
        }
    });
});

function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(42.696552, 23.32601),
        zoom: 12,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.696552, 23.32601),
        map: map
    });
}