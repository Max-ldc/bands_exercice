<?php

require_once 'findBandStyle.php';

function createCard(Band $band) : void
{ ?>
    <div class="card col-auto text-center shadow">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $band->getName(); ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $band->getDate(); ?></h6>
            <p class="card-text"> <?php echo $band->getStyle(); ?> </p>
        </div>
    </div>

<?php }