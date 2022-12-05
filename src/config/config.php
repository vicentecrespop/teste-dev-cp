<?php

    $dbname = "db_teste_dev";
    $server = "db-teste-dev.c1ba0xprdutv.us-east-1.rds.amazonaws.com";
    $user = "vicentecrespop";
    $password = "vicente123";
    $port = "5432";
    $driver = "pgsql";
    $connect;

    $pdo = new PDO("{$driver}:host={$server};port={$port};dbname={$dbname}", $user, $password);
    
?>






