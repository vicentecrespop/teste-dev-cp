<?php

    if(isset($_GET)) {
        $url = $_SERVER['REQUEST_URI'];
        if($url === '/cp-teste-dev/server.php') {
            include('./index.php');
        } else {
            include('./users.php');
        }
    }

?>