/*
Pré-requis : charger la librairie Google Maps, son module Geometry, et la librairie OpenLayers :
<script src="https://maps.googleapis.com/maps/api/js?key=...&libraries=geometry&sensor=false"></script>
<script src="http://openlayers.org/api/OpenLayers.js"></script>
*/

// Carte
var cartographie = new OpenLayers.Map('carte'); // <div id="carte"></div>
var couche_osm = new OpenLayers.Layer.OSM('OSM');
cartographie.addLayer(couche_osm);

// Adresses
var origin = '191 rue Saint-Jacques, Paris';
var destination = '37 bd Romain Rolland, Montrouge';

// Itinéraire
var directionsService = new google.maps.DirectionsService();
directionsService.route({origin:origin, destination:destination, travelMode:google.maps.TravelMode.DRIVING}, function(result, status){
    if(status == google.maps.DirectionsStatus.OK)
    {
        // Ajout d'une couche à la carte
        var styleMap = new OpenLayers.StyleMap({'default':new OpenLayers.Style({strokeWidth:2, strokeColor:'red'})});
        var couche_itineraires = new OpenLayers.Layer.Vector('Itinéraire', {styleMap:styleMap});
	cartographie.addLayer(couche_itineraires);
	
	// Parcours des points de l'itinéraire
	var encoded_polyline = result['routes'][0]['overview_polyline']['points'];
	var decoded_polyline = google.maps.geometry.encoding.decodePath(encoded_polyline);
	var points = new Array();
	for(var i in decoded_polyline)
	{
	    var lonlat = new OpenLayers.LonLat(decoded_polyline[i].lng(), decoded_polyline[i].lat()).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:3857"));
		var point = new OpenLayers.Geometry.Point(lonlat.lon, lonlat.lat);
		points.push(point);
	}
	
	// Ajout de l'itinéraire à la couche
	couche_itineraires.addFeatures([new OpenLayers.Feature.Vector(new OpenLayers.Geometry.LineString(points))]);
	
	// Centrage de la carte sur l'emprise de la couche
	cartographie.zoomToExtent(couche_itineraires.getDataExtent());
    }
});