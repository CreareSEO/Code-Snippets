//Add this script somewhere inside the body tags

function initMap() {
  var pointA = new google.maps.LatLng(51.961504, 1.351322), //get coords for the origin
      pointB = new google.maps.LatLng(52.432767,1.474246), //get coords for the destination
      myOptions = {
        zoom: 8, // The initial zoom level when your map loads (0-20)
        minZoom: 0, // Minimum zoom level allowed (0-20)
        maxZoom: 20, // Maximum soom level allowed (0-20)
        zoomControl:true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
        zoomControlOptions: {
        style:google.maps.ZoomControlStyle.DEFAULT // Change to SMALL to force just the + and - buttons.
        },
        center: pointA, // Centre the Map to our coordinates variable
        mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
      
        // All of the below are set to true by default, so simply remove if set to true:
        panControl:false, // Set to false to disable
        mapTypeControl:false, // Disable Map/Satellite switch
        scaleControl:true, // Set to false to hide scale
        streetViewControl:false, // Set to disable to hide street view
        overviewMapControl:false, // Set to false to remove overview control
        rotateControl:true // Set to false to disable rotate control
      },
      map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
      image = new google.maps.MarkerImage("<?php echo get_template_directory_uri(); ?>/images/marker.png", null, null, null, new google.maps.Size(94,44)); // Create a variable for our marker image.
    
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService,
    directionsDisplay = new google.maps.DirectionsRenderer({
      map: map
    }),
    markerA = new google.maps.Marker({
      position: pointA,
      title: "point A",
      label: "", //leave this empty if you're using a custom marker (deleting it will place a default marker)
      icon: image,
      map: map
    }),
    markerB = new google.maps.Marker({
      position: pointB,
      title: "point B",
      label: "B",
      map: map
    });

  // get route from A to B
  calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

}

function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
  directionsService.route({
    origin: pointA,
    destination: pointB,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

initMap();

//Add the following div where you want the map to appear
//<div id="map-canvas”></div>

//And don't forget to load the Google Maps API script in the head! - <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
// :)