<?php
include "data.php";

$userAdd = [
    ['city'=>'Lille','age'=>15],
    ['city'=>'Hirson','age'=>16],
    ['city'=>'La Tronche','age'=>46],
    ['city'=>"Trécon",'age'=>50],
    ['city'=>"Trélon",'age'=>20],
    ['city'=>'Paris','age'=>50]
];

$userLove = [
    ['passion'=>'foot'],
    ['passion'=>'danse'],
    ['passion'=>'aqua-poney'],
    ['passion'=>'photographie'],
    ['passion'=>'cross'],
    ['passion'=>'marathon']
];

foreach ($users as $key => $user) {
    echo "<a href='p2.php?id=$key'>".$user['nom'] . " " . $user["prenom"] . "</a><br>";
}