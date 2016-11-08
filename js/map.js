var lenen = new google.maps.LatLng(55.779587, 37.576211);
var mark = new google.maps.LatLng(55.779587, 37.576211);

google.maps.event.addDomListener(window, 'load', init);
var map;
function init() {
    var mapOptions = {
        center: lenen,
        zoom: 15,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
        },
        disableDoubleClickZoom: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        },
        scaleControl: true,
        scrollwheel: false,
        streetViewControl: false,
        draggable : false,
        overviewMapControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles:[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#A7DBD8"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#CFF09E"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill"},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#7dcdcd"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]}]
    }
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

	marker = new google.maps.Marker({
    icon: 'http://iam.ras.ru/wp-content/themes/iam-purevedro2/img/map.svg',
            position: mark,
            map: map
        });
}