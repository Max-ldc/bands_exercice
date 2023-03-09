<?php

require_once 'classes/BandDb.php';
require_once 'classes/StyleDb.php';
require_once 'classes/Band.php';
require_once 'classes/Style.php';
require_once 'layout/header.php';

// création database des styles de musique
$styledb = new Styledb();
$styles = $styledb->getStyles();

// création database des groupes de musique
$banddb = new BandDb($styles);
$bands = $banddb->getBands();
?>

<section class="container mt-5">
    <div class="row justify-content-around flex-wrap">
        <?php foreach ($bands as $band) {
        $create = $band->bandCard();
        }?>
    </div>
</section>

<?php
require_once 'layout/footer.php';