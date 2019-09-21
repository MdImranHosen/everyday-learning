////////////////////:::::::::::::::::::::::::::: History recorded draw  with google map and ajax  ::::::::::::::::::::::::::::://////
<div id="map" style="width:100%;height:400px;"></div>
    <script type="text/javascript">

      var poly;
      var map;
      var path;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 23.7104, lng:90.40744}
        });

        poly = new google.maps.Polyline({
          strokeColor: 'red',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });
        poly.setMap(map);

      }
       
          $.ajax({
            type: "GET",
            url: "url", 
            success: function(route_result) {
            console.log(route_result);
             
            path = poly.getPath();

            for (var ro in route_result) { 

               path.push(new google.maps.LatLng({lat: route_result[ro].latitude, lng: route_result[ro].longitude}));
             }

            }
          });
    </script>

//////////////////////::::::::::::::::::::::::: Smaple Map:::::::::::::::::::////////////////////////
<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
  </body>
</html>
