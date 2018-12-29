<!DOCTYPE html>
<html lang="fr">

<?php include "html/head.html"; ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

 <body>
    <div class="container">
<?php
include "html/nav.html";
?>

   <div id ="body_search"  class="col-12 col-sd-12 col align-self-center">              
         <form>
         <div class="row justify-content-around">             
            <div class="col-sm-4">
                <input type="text" name="startPoint" id="startPoint" class="form-control" placeholder="Départ">             
            </div>
            <div class="col-sm-4">
                <input type="text" id="endPoint" class="form-control" placeholder="Arrivée">
            </div>    
            <div class="col-sm-4">
                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                     <input type="text" name="dateTimeS" id ="dateTimeS" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                         <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                         </div>
                </div>
            </div>    
            <div class="col align-self-center">
                 <button id ="btn_search" type="submit" class="btn btn-success">Rechercher</button>
               </div>
               </div>
         </form>
      
   </div>
</div>

<script src="js/map.js"></script>

     
<script src="js/app.js"></script>
<script src="js/cfg.js"></script>

<?php
include "html/footer.html";
?>



