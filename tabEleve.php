<?php

$promo = [
    0 => ["Alexis", "Laroche", 26, "St-Michel", "passions" => ["connerie", "connerie", "connerie"]],
    1 => ["Ah ça", "oui !", 19, "OuiLand", "passions" => ["dire oui", "encore dire oui", "toujours dire oui"]],
]

?>

<ul>
    <li><?= $promo[0][0]." ".$promo[0][1]?></li>
    <li><?= $promo[1][0]." ".$promo[1][1]?></li>
</ul>
