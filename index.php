<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html"; ?>
 <body>
    <div class="container">
<?php
include "html/nav.html";
?>


<div class="row">
<div id ="body_search">
  <div class="col-md-10 offset-md-1">
          
    <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Départ">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Arrivée">
    </div>
    <div class="col">
      <input type="Date" class="form-control" placeholder="Date">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Rechercher</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div>

<?php
include "html/footer.html";
?>



