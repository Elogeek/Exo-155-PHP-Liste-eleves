<?php

if(isset($_GET['id'])){
    include "data.php";
    $user = $users[$_GET['id']];

    print_r($user);
}
