//require([
//    "esri/Map",
//    "esri/views/MapView",
//    "dojo/domReady!"
//], function (Map, MapView) {
//    var map = new Map({
//        basemap: "streets"
//    });
//    var view = new MapView({
//        container: "viewDiv", // Reference to the scene div created in step 5
//        map: map, // Reference to the map object created before the scene
//        zoom: 7, // Sets zoom level based on level of detail (LOD)
//        center: [18.50878632, 52.8]  // Sets center point of view using longitude,latitude
//    });
//    
//});

var map;
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 53.1256045, lng: 17.8977559},
        zoom: 8
    });
    var labels = 'ABCDEFGHIJKLMNOPQRSTUWXYZ';
    var markers = locations.map(function (location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });
    markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    var marker = new google.maps.Marker({position: uluru, map: map});
}
var locations = [
    {lat: 53.124107, lng: 17.985001},
    {lat: -31.563910, lng: 147.154312}
];


                