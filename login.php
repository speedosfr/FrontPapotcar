<?php
session_start();


?>

<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html"; ?>
 <body>
 <div class="container">
<?php
include "html/nav.html";
?>
<div class="row">
<div id ="body_login" class="col-sm-2 col-lg-4 offset-lg-4">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse mail">
    <small id="emailHelp" class="form-text text-muted">Ne partager jamais votre compte avec une autre personne.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  </div>
  <div class="form-check">    
  <a href="signin.php" ><label class="form-check-label" for="exampleCheck1">S'inscrire</label></a>
  </div>
  <div class="form-check">
    <label class="form-check-label" for="exampleCheck1">Mot de pass oublié ?</label>
  </div>
  <button type="submit" id="btn_login" class="btn btn-success">Se connecter</button>
</form>
</div>


<script src="js/jquery.js"></script>
<script src="js/map.js"></script>
<?php
include "html/footer.html";
?>
