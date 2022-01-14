<?php
require "tabEleve.php";
$titleHeader = "Ma liste d'élèves";
require "./partials/header.php";
?>
<div id="container">
    <h1>Listes des élèves de la promo</h1>
    <ul>
        <li><a href="/detailsEleve.php/?eleve1=alexis"><?= $promo[0][0]." ".$promo[0][1]?></a></li>
        <li><a href="/detailsEleve.php/?eleve2=ahçaoui"><?= $promo[1][0]." ".$promo[1][1]?></a></li>
    </ul>
</div>


<?php
require "./partials/footer.php";


