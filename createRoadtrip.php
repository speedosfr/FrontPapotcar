<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html";?>

<body>
    <div class="container">
        <?php
include "html/nav.html";
?>
            <div id="body_signin">
                <div class="row">
                    <div class="col-md-6">
                        <div class="jumbotron">
                            <h4 class="col-md-2 offset-md-0">Itinéraire</h4>
                            <hr class="my-1">
                            <form action="index.php?page=Create&action=create" method="post">
                            <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="startPoint"></label>
                                        <input type="text" class="form-control" id="startPoint" placeholder="D'ou partez vous ?" onFocus="geolocate()">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="endPoint"></label>
                                        <input type="text" class="form-control" id="endPoint" placeholder="Ou allez vous ?" onFocus="geolocate()">
                                    </div>
                                </div>
                                <h4 class="col-md-2 offset-md-0">Etapes</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addStep">+</span>
                                            </div>
                                            <input type="text" id="stepPoint" class="form-control" placeholder="Lieu étape" aria-label="stepPoint1" aria-describedby="basic-addon1" onFocus="geolocate()">
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-1">
                                <h4 class="col-md-7">Dates et horaires</h4>
                                <hr class="my-1">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group col-md-12">
                                            <label for="dayStart">Aller</label>
                                            <input type="date" class="form-control" id="dayStart">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group col-md-3">
                                            <label for="startTime">Heure</label>
                                            <input type="time" name="wakeup" id="startTime">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group col-md-12">
                                                <label for="dayStart">Retour</label>
                                                <input type="date" class="form-control" id="dayStart">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group col-md-3">
                                                <label for="startTime">Heure</label>
                                                <input type="time" name="wakeup" id="startTime">
                                            </div>
                                        </div>
                                    </div>                               
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-3">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Continuer</button>
                <button type="cancel" id="cancel" class="btn btn-success">Annuler</button>
                <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"
        async defer></script>

 
   