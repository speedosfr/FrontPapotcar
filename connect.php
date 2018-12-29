<?php
//Base de données en local
define('SERVER' ,"82.67.136.78:3306");
define('USER' ,"nicololo");
define('PASSWORD' ,"nico");
define('BASE' ,"Autopartage");
// connexion
try
{
$connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE,USER, PASSWORD);
}
catch (Exception $e)
{
echo 'Erreur :' .$e->getMessage();
    die();
}

var_dump($connexion);
$requete = "SELECT * FROM utilisateurs ORDER BY nom, prenom";
$resultat = $connexion->query($requete);

if ($resultat) {
    $liste = $resultat->fetchall(PDO::FETCH_ASSOC);
    
    echo '<table border=1>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        ';
    foreach($liste as $element){
        echo "<tr>";
        echo "<td>".$element["id"]."</td>";
        echo "<td>".$element["prenom"]."</td>";
        echo "<td>".$element["nom"]."</td>";
        echo "<td>".$element["ville"]."</td>";
        echo "<td><a href='FormModif.php?id="
            .$element["id"]
            ."&prenom="
            .$element["prenom"]
            ."&nom="
            .$element["nom"]
            ."&ville="
            .$element["ville"]
            ."'>Modifier</a></td>";
        echo "<td><a href='suppr.php?id=".$element["id"]."'>Supprimer</a></td>";
        echo "</tr>";
    }
    echo '</table>';
    }
    else {
        echo "aucun nom dans la table";
    }
   

?>