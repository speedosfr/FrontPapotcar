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
                            <h6 class="col-md-5 offset-md-0">Prix par passager</h6>
                            <hr class="my-1">
                            <form action="index.php?page=Create&action=create" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="startPoint"></label>
                                        <input type="text" class="form-control" id="startPpoint" placeholder="ville depart" disable />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="endPoint"></label>
                                        <input type="text" class="form-control" id="endPpoint" placeholder="ville arrivée" disable />
                                    </div>
                                    <div class="form-group col-sm-2 offset-md-2">
                                        <label for="price"></label>
                                        <input type="text" class="form-control" id="startPpoint" placeholder="€">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-6 col-form-label">Nbre de places proposées</label>
                                    <div class="col-sm-2 offset-md-4">
                                        <input type="text" class="form-control" id="nbSeat" placeholder="">
                                    </div>
                                </div>
                                <hr class="my-1">
                                <h6 class="col-md-1">Options</h6>
                                <hr class="my-1">
                                <div class="form-row">
                                    <p>2 places max à l'arrière </p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="seatAvoid">
                                        <label class="custom-control-label" for="seatAvoid">je garantis au plus 2 passagers à l'arrière de la voiture</label>
                                    </div>
                                </div>
                                <br>
                                <hr class="my-1">
                                <h6 class="col-sm-5">Détails du voyage</h6>
                                <hr class="my-1">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="commentDetail">Avez-vous d autres précisions à apporter à votre trajet ?</label>
                                        <textarea class="form-control rounded-0" id="commentDetail" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Afficher le même commentaire pour l'aller et le retour</label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Votre voiture</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choisir...</option>
                                        <option value="1">La 406 à Nico</option>
                                        <option value="2">La juke à Eddy Mitchel</option>
                                        <option value="3">la Fiat à ma femme</option>
                                    </select>
                                    </div>
                                </div>
                            </form>
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
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
