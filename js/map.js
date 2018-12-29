var villeD,villeA,villeE,distance,duration,seatAvoid;


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
    center: {lat: 48.8534, lng: 2.3488}
  });
  directionsDisplay.setMap(map);

  document.getElementById('btn_calculer').addEventListener('click', function() {
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
      recupVariable(response);
      var route = response.routes[0];
      
      var summaryPanel = document.getElementById('roadBook');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Départ : </b>';
        summaryPanel.innerHTML += route.legs[i].start_address +'<br>';
        summaryPanel.innerHTML += '<b>Arrivée : </b>';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += '<b>Distance : </b';
        summaryPanel.innerHTML += route.legs[i].distance.text + '<br>';
        summaryPanel.innerHTML += '<b>Durée </b> : ';
        summaryPanel.innerHTML += route.legs[i].duration.text + '<br>';
        summaryPanel.innerHTML += ' <hr class="my-1">';
      }
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });

}  
function recupVariable(response){
  console.log("recupvariable")
  var details_road = response.routes[0];
  var obj = []
  for (var i = 0; i < details_road.legs.length; i++) {      
      villeD   = details_road.legs[i].start_address;
      villeA   = details_road.legs[i].end_address;
      distance = details_road.legs[i].distance.text
      duration = details_road.legs[i].duration.text;        
  }  
}
// Appel de la fonction create_roadTrip***********************
$("#btn_subRoadBook").click(function (e) {
  e.preventDefault(); 
  if (document.getElementById('seatAvoid').checked) {
    console.log("checkeeeee");
    seatAvoid ="on"
  }else{
    console.log("non checked")
    seatAvoid="off"
  }
  create_roadTripe();
});

// Call ajax envoi formaulaire creation trajet
function create_roadTripe() {   
  $.ajax({
      type: 'POST',
      url: "http://auto-partage.cfapps.io/api-rest/roadtrips/test/",     
      data: JSON.stringify({
          startpoint: villeD,
          endpoint: villeA,          
          starttime: $("#dateTimeS").val(),
          distance: distance,
          traveltime: duration,
          capacity: $("#nbSeat").val(),
          onlyTwoBackSeatWarranty : seatAvoid,
          additionalInformation: $("#commentDetail").val()
      }),
      dataType: "json",
      contentType: "application/json",
      success: function (data) {console.log(data);},
      error: function(jqXHR, textStatus, errorThrown) {
          if(jqXHR.status == 409){
              $("#formSignIn").append(
                  `<div class="alert alert-warning">
                      <p>Un utilisateur utilise déjà cet email, merci de corriger le formulaire.</p>
                  </div>`);
          }else{
              console.log("FAILED......=============================");
              
          }
      }
  });
}

$("#btn_subUser").click(function (e) {
  e.preventDefault(); 
  console.log("appel validUser") 
  validUser();
}); 


// Vérification du formulaire de création USER********************************************************
function validUser()
{  
  
    if ( $("#pwd1").val() != "" && $("#pwd1").val() != $("#pwd2").val())    {
        alert ( "Verifier votre mot de passe" );
        valid = false;
        $("#pwd1").focus();
return valid;
    }
   /*  if ( $("#pwd2").length < 6 )    {
      alert ( "Le mot de passe doit contenir 8 caracteres" );
      valid = false;
      $("#pwd1").focus();
return valid;
  } */
    if ( $("#pwd1").val() ==  $("#firstName").val()  || $("#pwd1").val() ==  $("#lastName").val()  ) {
        alert("le mot de passe doit etre different du prenom ou du nom !");
        valid = false;
        $("#pwd1").focus();
return valid;
      }
      re = /[0-9]/;
      if(!re.test($("#pwd1").val())) {
        alert("Le mot de passe doit contenir au moins un chiffre (0-9)!");
        $("#pwd1").focus();
        valid = false; 
return valid;        
      }    
    re = /[A-Z]/;
      if(!re.test($("#pwd1").val())) {
        alert("Le mot de passe doit contenir au moins une majuscule (A-Z)!");
        $("#pwd1").focus();
        valid = false;
return valid; 
      } 
      re = /[^ \w]/;
      if(!re.test($("#pwd1").val())) {
        alert("Le mot de passe doit contenir au moins un caractère spécial!");
        $("#pwd1").focus();
        valid = false;
return valid; 
      }

     if ( valid = true) {      
        console.log("tout va bien navette, je vais crypter le mdp")       
     } 

}
$("#btn_vldRGPD").click(function (e) {
  e.preventDefault();  
  create_user();
}); 

// Call Ajax envoi formulaire USER
function create_user() {
  console.log($("#genre").val() );    
  $.ajax({
      type: 'POST',
      url: "http://auto-partage.cfapps.io/api-rest/users-list/",
      //url: "http://localhost:8080/api-rest/users-list/",
      data: JSON.stringify({
          birthYear: $("#birthYear").val(),
          email: $("#email").val(),          
          firstName: $("#firstName").val(),
          lastName: $("#lastName").val(),  
          password: $("#pwd2").val(),       
          phoneNumber: $("#phoneNumber").val(),
          userGenre : $("#genre").val()          
      }),
      dataType: "json",
      contentType: "application/json",
      success: function (data) {
        console.log(data);
        $("#show_result").append(
          `<div class="alert alert-success" role="alert">  
              <p>Votre compte est créé .</p>
          </div>`);
          setTimeout(function(){ window.location = 'login.php';
         }, 2000);
          
      },
      error: function(jqXHR, textStatus, errorThrown) {
          if(jqXHR.status == 409){
              $("#formSignIn").append(
                  `<div class="alert alert-warning">
                      <p>Un utilisateur utilise déjà cet email, merci de corriger le formulaire.</p>
                  </div>`);
          }else{
              console.log("FAILED......=============================");
              
          }
      }
  });
}
$("#btn_noRGPD").click(function (e) {
  e.preventDefault();  
  setTimeout(function(){ window.location = 'index.php';
}, 1000);
}); 

 
  $("#btn_login").click(function(){
      var email = $("#exampleInputEmail1").val();
      var password = $("#exampleInputPassword1").val();
      console.log("email => " +email)
      console.log("Pass  => " +password)
      if( email != "" && password != "" ){
        console.log("appel ajax")
        $.ajax({
          type: 'POST',
          url:'http://auto-partage.cfapps.io/api-rest/users/connection',
          data: JSON.stringify({ 
            email: "dynaouest@gmail.com",
            password: "password"
          }),
          dataType: "json", 
          contentType: "application/json",        
          success: function (data) {
              console.log("cool " + data +" " +status);
              $("#body_login").text(data);
          },    
          error : function(resultat, statut, erreur){
              console.log("resultat" +resultat.status+" "+status+" "+erreur);
              $("#body_login").text(status);
          }
      });
};
  }); 

 