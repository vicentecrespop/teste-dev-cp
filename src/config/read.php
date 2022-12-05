<?php
    require './config.php';

    if(isset($_GET)) {
        $sql = $pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();
    
        $fetchClients = $sql->fetchAll();
        echo json_encode($fetchClients);   
    }  

?>