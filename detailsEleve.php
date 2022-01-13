<?php
require 'tabEleve.php';
if (isset($_GET['eleve1'])) {?>
    <ul>
        <li>age: <?= $promo[0][2]?></li>
        <li>ville: <?= $promo[0][3] ?></li>
        <li>passions
            <ul>
                <?php foreach ($promo[0]["passions"] as $value) {?>
                    <li><?= $value ?></li><?php
                }?>

            </ul>
        </li>
    </ul>
    <a href="/index.php">Home</a>
<?php
}
else {?>
    <ul>
        <li>age: <?= $promo[1][2]?></li>
        <li>ville: <?= $promo[1][3] ?></li>
        <li>passions
            <ul>
                <?php foreach ($promo[1]["passions"] as $value) {?>
                    <li><?= $value ?></li><?php
                }?>

            </ul>
        </li>
    </ul>
    <a href="/index.php">Home</a>
<?php
}