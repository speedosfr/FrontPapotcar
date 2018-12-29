<?php
session_start();


?>
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
    <div class="col-md-8 offset-md-2">
    <span id="txt_pswd" class="col-md-2 offset-md-0">* champs requis </span>
      <form  action="signin_RGPD.php" method="POST" onsubmit="return validUser()">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" name ="genre" id="genre">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
                <option value="Autre">Autre</option>
              </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputLastname">Nom *</label>
            <input type="text" name="lastName" class="form-control" id="lastName" required>
            <span id="missLastName"></span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputFirstname">Prenom *</label>
            <input type="text" name="firstName"class="form-control" id="firstName" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputbirthYear">Année de naissance *</label>
            <input type="text" name="birthYear" class="form-control" id="birthYear" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputMail">Adresse Mail *</label>
            <input type="text" name="email" class="form-control" id="email" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPhone">Telephone *</label>
            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword1">Mot de passe *</label>
            <input type="password" name="pwd1" class="form-control" id="pwd1" >
            
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword2">Mot de passe *</label>
            <input type="password" name="pwd2" class="form-control" id="pwd2" >
          </div>
          <span id="txt_pswd" class="col-md-6 offset-md-3"> Au moins une majuscule, un chiffre et un caractère spécial</span>
           
        </div>        
        <a href="signin_RGPD.php" ><button type="submit"  class="btn btn-success">Suivant</button></a>
       
        <a href="index.php" ><button type="cancel" id ="btn_cancelUser"class="btn btn-success">Retour</button></a>
      </form>
    </div>
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/map.js"></script>
<?php
include "html/footer.html";
?>
