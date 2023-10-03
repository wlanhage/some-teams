<?php

require('data.php');

$displayedCities = [];

 ?> <div class="citiestext"> The football teams are from the following cities: <br> </div><?php

foreach ($teams as $team) {
    $city = $team['city'];

    if (!in_array($city, $displayedCities)) {
        ?>
        <div class="cities"> 
        <?php
        echo  $city . '<br>';
        
        ?> </div> <?php
        $displayedCities[] = $city;
    }
}?>
