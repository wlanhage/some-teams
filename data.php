<?php

$teams = [
    'Arsenal' => [
        'league' => 'Premier league',
        'last-time-champions' => 2004,
        'city' => 'London',
        'url' => 'https://www.arsenal.com/'
    ],
    'Aston Villa' => [
        'league' => 'Premier league',
        'last-time-champions' => 1981,
        'city' => 'Birmingham',
        'url' => 'https://www.avfc.co.uk/'
    ],
    'Manchester City' => [
        'league' => 'Premier league',
        'last-time-champions' => 2023,
        'city' => 'Manchester',
        'url' => 'https://www.mancity.com/'
    ],
    'Newcastle' => [
        'league' => 'Premier league',
        'last-time-champions' => 1927,
        'city' => 'Newcastle',
        'nickname' => 'Magpies',
        'url' => 'https://www.nufc.co.uk/'
    ],
    'Chelsea' => [
        'league' => 'Premier league',
        'last-time-champions' => 2017,
        'city' => 'London',
        'url' => 'https://www.chelseafc.com/en'
    ],
    'Watford' => [
        'league' => 'Championship',
        'last-time-champions' => null,
        'city' => 'London',
        'url' => 'https://www.watfordfc.com/'
    ],
    'Brighton' => [
        'league' => 'Premier league',
        'last-time-champions' => null,
        'city' => 'Brighton',
        'url' => 'https://www.brightonandhovealbion.com/'
    ],
];
?>

<table>
    <thead>
        <th>Team</th>
        <th>City</th>
        <th>Division</th>
        <th>Nickname</th>
        <th>Last time champions</th>
        <th>Homepage </a> </th>
    </thead>
    <tbody>
        <?php foreach ($teams as $key => $team): ?>
            <tr>
                <td> <?php echo $key ?></td>
                <td> <?= $team ['city'];?> </td>
                <td> <?= $team ['league'];?> </td>
                <td> <?php 
                        if (array_key_exists('nickname', $team)) {
                            echo $team['nickname'];
                            
                        }
                        else {
                            echo "no nickname";
                        };
                        
                        
                    ?> </td>
                <td> <?= $team ['last-time-champions'] ; ?> </td>
                <td> <a href="<?= $team ['url'];?>"> <?= $team ['url'];?> </a> </td>
            </tr>
            <?php endforeach ?>
        
        
    </tbody>


</table>
    


