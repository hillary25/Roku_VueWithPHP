<?php
    require_once '../load.php';

    // Order of operations: alluserscomponent.js, then to here, then user.php, then back to here, then finish at alluserscomponent.js
    if(isset($_GET['allusers'])) {
        $users = getAllUsers();
        echo $users;
    }