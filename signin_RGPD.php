<?php 

session_start();
$genre = $_POST['genre'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$birthYear = $_POST['birthYear'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];

?>

<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html";?>
 <body>
 <div class="container">
<?php
include "html/nav.html";
?>
<div class="jumbotron">
  <h1 class="display-4">Vos informations</h1>
  <p class="lead">Verifier l'exactitude de vos informations.</p>
  <hr class="my-4">
  <p><?php echo $genre ; ?> <?php echo $lastName ; ?> <?php echo $firstName ; ?></P>
  <p> Année de naissance : <?php echo $birthYear ; ?></p>
  <p> Adresse mail : <?php echo $email ; ?></p>
  <p> Numéro de telephone : <?php echo $phoneNumber ; ?></p>

  <h6>En cliquant sur valider , vous acceptez notre politique de confidentialité(RGPD).</h6>
  <a id="btn_vldRGPD"class="btn btn-primary btn-lg" href="#" role="button">Envoyer</a>
  <a id="btn_noRGPD" class="btn btn-primary btn-lg" href="#" role="button">Refuser</a>
  <div id="show_result"></div>
</div>
<div id="formCrypt">
            <input type="text" name="genre" class="form-control" id="genre" value ="<?php echo $genre ; ?>">         
            <input type="text" name="lastName" class="form-control" id="lastName" value ="<?php echo $lastName ; ?>">            
            <input type="text" name="firstName"class="form-control" id="firstName" value ="<?php echo $firstName ; ?>">
            <input type="text" name="birthYear" class="form-control" id="birthYear"value ="<?php echo $birthYear ; ?>">
            <input type="text" name="email" class="form-control" id="email" value ="<?php echo $email ; ?>">
            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value ="<?php echo $phoneNumber ; ?>">
            <input type="password" name="pwd2" class="form-control" id="pwd2" value ="<?php echo $password2 ; ?>">
        
    </div>
  </div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/map.js"></script>
<?php
include "html/footer.html";
?>