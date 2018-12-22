<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html";?>
 <body>
 <div class="container">
<?php
include "html/nav.html";
?>
<div class="row">
  <div id ="body_signin">
    <div class="col-md-4 offset-md-4">
      <form action="index.php?page=Create&action=create" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputLastname">Nom</label>
            <input type="text" class="form-control" id="inputLastname" placeholder="Nom">
          </div>
          <div class="form-group col-md-6">
            <label for="inputFirstname">Prenom</label>
            <input type="text" class="form-control" id="inputFirstname" placeholder="Prenom">
          </div>
          <div class="form-group col-md-6">
            <label for="inputbirthYear">Année de naissance</label>
            <input type="text" class="form-control" id="inputbirthYear" placeholder="Année naissance">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputMail">Adresse Mail</label>
            <input type="text" class="form-control" id="inputMail" placeholder="@mail">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPhone">Telephone</label>
            <input type="text" class="form-control" id="inputPhone" placeholder="Téléphone">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword2">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe">
          </div>
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
        <button type="cancel" class="btn btn-success">Annuler</button>
      </form>
    </div>
  </div>
</div>