<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html";?>

<body>
    <div class="container">
        <?php
include "html/nav.html";?>
            <div id="body_createRoadTrip" >
                <div id ="createRoad" class="row">
                    <div class="col-md-6">
                        <div class="jumbotron">
                            <h4 class="col-md-2 offset-md-0">Itinéraire</h4>
                            <hr class="my-1">
                            <form action="#" method="POST" name="road_form"  >
                                    <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="startPoint"></label>
                                                <input type="text" size ="30" name="villeD" class="form-control" id="startPoint" placeholder="D'ou partez vous ? * " required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="endPoint"></label>
                                                <input type="text" name="villeA" class="form-control" id="endPoint" placeholder="Ou allez vous ? *" required >
                                            </div>
                                        </div>
                                        <h4 class="col-md-2 offset-md-0">Etapes</h4>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addStep">+</span>
                                                    </div>
                                                    <input type="text" name="villeE" id="stepPoint" class="form-control" placeholder="Lieu étape" aria-label="stepPoint1" aria-describedby="basic-addon1" />
                                                </div>
                                            </div>
                                        </div>
                                            <a href="#"  type="cancel" id="btn_calculer" class="btn btn-success">Calculer </a>
                                        <div id="detail_road">
                                        <h4 class="col-md-7">Dates et horaires</h4>                                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                        <input type="text" name="dateTimeS" id ="dateTimeS" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>                                       
                                                <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                        <input type="text" name="dateTimeB" id="dateTimeB" class="form-control datetimepicker-input" data-target="#datetimepicker2" />
                                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>  
                                                <div class="row" id="nb_place">                                    
                                                    <div class="col-md-2 offset-md-0">
                                                        <input type="text" name="nbSeat" class="form-control" id="nbSeat" placeholder="">                                        
                                                    </div>
                                                        <label for="inputPassword" class="col-md-6 offset-md-0 col-form-label">Nbre de places proposées</label>
                                                </div>
                                                <div class="row" id="chk_place">                                                                  
                                                    <div class="form-row col-md-12 offset-md-0">                                   
                                                        <div class="custom-control custom-checkbox" >
                                                            <input type="checkbox" class="custom-control-input" name="seat" id="seatAvoid">
                                                            <label class="custom-control-label" for="seatAvoid">Je garantis au plus 2 passagers à l'arrière</label>                                           
                                                        </div>                                    
                                                    </div>
                                                </div>   
                                                <div class="form-group row" id="details">  
                                                    <h4 class="col-md-7 ">Détails du voyage</h4> 
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group class= col-md-12">
                                                        <label for="commentDetail">Avez-vous d autres précisions à apporter à votre trajet ?</label>
                                                        <textarea class="form-control rounded-0" name="commentDetail" id="commentDetail" rows="6"></textarea>
                                                    </div>
                                                </div>
                                              <button type="submit" id ="btn_subRoadBook" class="btn btn-success col-md-4 offset-md-4">Continuer</button>
                                            </div>
                                        </div>    
                                    </div>                                
                            </form>
                        
                    </div>
                </div>                    
                <div class="row">
                    <div class="col">
                        <div class="form-group col-lg-3 offset-lg-0" >
                            <div id="map"></div>
                            <div id="roadBook"></div>
                        </div>
                    </div>
               </div>
            </div>
                <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"
        async defer></script>
        <script src="js/map.js"></script>
<script src="js/app.js"></script>
<script src="js/cfg.js"></script>

