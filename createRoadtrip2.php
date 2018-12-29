<?php
session_start();
$villeD = $_POST['villeD'];
$villeA = $_POST['villeA'];
$villeE = $_POST['villeE'];
$dateS =$_POST['dateTimeS'];
$dateB =$_POST['dateTimeB'];
$nbSeat =$_POST['nbSeat'];
$seatAvoid =$_POST['seatAvoid'];
$commentDetail =$_POST['commentDetail'];

var_dump("ville départ" .$villeA);
var_dump("ville arrivée" .$villeD);
var_dump("ville etape" .$villeE);
var_dump("date départ" .$dateS);
var_dump($dateB);
var_dump("nombre de place" .$nbSeat);
var_dump("2 places garanties " .$seatAvoid);
var_dump("commentaire" .$commentDetail);



?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

<!DOCTYPE html>
<html lang="fr">
<?php include "html/head.html";?>
<body>
    <div class="container"><?php
include "html/nav.html";
?>
            <div id="body_signin">
                <form action="#" method="POST" onsubmit="return create_roadTrip();">
                
                </div>
                <button type="submit" class="btn btn-success">Continuer</button>
                <button type="cancel" id="cancel" class="btn btn-success">Annuler</button>
</form>
            
                <script src="js/map.js"></script>
<script src="js/app.js"></script>
<script src="js/cfg.js"></script>