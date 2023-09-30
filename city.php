<?php

require('data.php');



foreach ($teams as $team) {
    $city = $team['city'];

    ?>
    <div class="cities">
    <?php
    echo $city . '<br>';
    
    
    }?> 
    </div>
    <?php


?>
