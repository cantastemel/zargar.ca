$(document).ready(function() {
    if ($('.skill-circle').length) {
        $('.skill-circle').percentcircle({
            animate: true,
            diameter: 70,
            guage: 2,
            coverBg: '#fff',
            bgColor: '#efefef',
            fillColor: '#beb7ae',
            percentSize: '18px',
            percentWeight: 'normal'
        });
    }
    if ($('.expertise-menu ul').length) {

        var ExpertiseMenu = function() {
            var menuWidth = 0;
            var carousel = $(".menu-expertise-menu-container ul");
            $('.expertise-menu ul li').each(function() {
                menuWidth += $(this).outerWidth();
            });
            if (menuWidth + 200 > $('.expertise-menu').outerWidth()) {
                $('.expertise-menu-nav').css({ 'display': 'inline-block' });
                var currentItemIndex = $(".menu-expertise-menu-container ul li").index($(".menu-expertise-menu-container ul li.current-menu-item"));
                carousel.itemslide({
                    duration: 600,
                    left_sided: false,
                    start: currentItemIndex,
                    disable_autowidth: false
                });
            }
            $(window).resize(function() {
                carousel.reload();
            }); //Recalculate width and center positions and sizes when window is resized

            $('.next').on("click", function() {
                carousel.next();
            });

            $('.prev').on("click", function() {
                carousel.previous();
            });
        };

        if ($(window).width() < 1024) {
            ExpertiseMenu();
        }

        $(window).on('resize', function() {
            if ($(window).width() < 1024) {
                console.log('now');
                ExpertiseMenu();
            }
        });

    }

    if ($('.profile-template').length) {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 25) {
                //$(".fs_bg").addClass('fixedToTop');
            } else {
                //$(".fs_bg").removeClass('fixedToTop');
            }
        });
    }

});

function initMap() {
    var map;
    var center = {
        lat: 49.284690,
        lng: -123.121606
    };
    var styles = [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e9e9e9"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 29
        }, {
            "weight": 0.2
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 18
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 21
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dedede"
        }, {
            "lightness": 21
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "visibility": "on"
        }, {
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "saturation": 36
        }, {
            "color": "#333333"
        }, {
            "lightness": 40
        }]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f2f2f2"
        }, {
            "lightness": 19
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 17
        }, {
            "weight": 1.2
        }]
    }];
    map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoomControl: true,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        styles: styles
    });

    var infoString = '<div style="text-align: center; padding: 10px; line-height: 1.6;"><span style="color: #6e6259; font-weight: bold;">ZARGAR LAWYERS + BUSINESS STRATEGISTS</span> <br>#1012-1030 West Georgia Street, Vancouver<br> British Columbia Canada V6C 3P6<br><br><a href="https://maps.google.com/maps?ll=49.284487,-123.121891&z=16&t=m&hl=en-US&gl=CA&mapclient=embed&daddr=1030%20W%20Georgia%20St%20Vancouver%2C%20BC%20V6C%202L1@49.2844874,-123.1218908" style="font-weight: bold; color: #6e6259;" target="_blank">Get Directions</a></div>';
    var infowindow = new google.maps.InfoWindow({
        content: infoString
    });

    var marker = new google.maps.Marker({
        position: center,
        animation: google.maps.Animation.DROP,
        map: map,
        icon: '/wp-content/themes/zargar/assets/img/zargar_logo_map@2x.png',
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}
