<?php

    $dbname = "d4ntsjcj95tffr";
    $server = "ec2-54-163-34-107.compute-1.amazonaws.com";
    $user = "ldcgkpgorylhao";
    $password = "c5e3039ed75c33c586faf9b0ef0a8c54a38983ab142a4770f716fe525c7df4f5";
    $port = "5432";
    $driver = "pgsql";
    $connect;

    $pdo = new PDO("{$driver}:host={$server};port={$port};dbname={$dbname}", $user, $password);

?>






