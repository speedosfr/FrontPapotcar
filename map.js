var lat , lng;


function maPosition(position) {
  var infopos = "Position déterminée :\n";
  infopos += "Latitude : "+position.coords.latitude +"\n";
  infopos += "Longitude: "+position.coords.longitude+"\n";
  infopos += "Altitude : "+position.coords.altitude +"\n";

   lat = position.coords.latitude;
   lng = position.coords.longitude

}
if(navigator.geolocation)
  navigator.geolocation.getCurrentPosition(maPosition);

// Fonction auto-completion des adresses----------------------------------------------
function initAutocomplete() {
  var  autocomplete,autocomplete2,autocomplete3
      // Create the autocomplete object, restricting the search to geographical
      // location types.
     
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('startPoint')),
          {types: ['geocode']});           

          autocomplete2 = new google.maps.places.Autocomplete(
              /** @type {!HTMLInputElement} */(document.getElementById('endPoint')),
              {types: ['geocode']}); 
              
          autocomplete3 = new google.maps.places.Autocomplete(
              /** @type {!HTMLInputElement} */(document.getElementById('stepPoint')),
              {types: ['geocode']});         

      // When the user selects an address from the dropdown, populate the address
      // fields in the form.           
      
      autocomplete.addListener();     
      autocomplete2.addListener();
      autocomplete3.addListener();       
      initMap();
     

    }  
//------------------------Geolocalisation-------------------------------



// Initialisation de la carte ---------------------------------------------------
function initMap() {

  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: {lat: lat, lng: lng}
  });
  directionsDisplay.setMap(map);

  document.getElementById('cancel').addEventListener('click', function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  });
}
// Récupération de l' etape------------------------------------------------------
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  var waypts = [];
  var checkboxArray = document.getElementById('stepPoint').value;
if (checkboxArray =="" ){
  checkboxArray = document.getElementById('endPoint').value;
}else{  
    waypts.push({
      location: checkboxArray,
      stopover: true        
    })
  }  
// Affichage despoints sur la carte + trajet  + infos detaillées----------------
  directionsService.route({
    origin: document.getElementById('startPoint').value,
    destination: document.getElementById('endPoint').value,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
      var route = response.routes[0];
      var summaryPanel = document.getElementById('directions-panel');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
            '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += route.legs[i].distance.text + '<br>';
        summaryPanel.innerHTML += route.legs[i].duration.text + '<br>';
      }
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}  