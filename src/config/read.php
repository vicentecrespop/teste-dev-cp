<?php
    require './config.php';

    if(isset($_GET)) {
        $id = filter_input(INPUT_GET, 'id');

        if($id) {
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sql->bindParam('id', $id);
            $sql->execute();
            
            $fetchClients = $sql->fetchAll();
            echo json_encode($fetchClients);

        } else {
            $sql = $pdo->prepare("SELECT * FROM usuarios");
            $sql->execute();
        
            $fetchClients = $sql->fetchAll();
            echo json_encode($fetchClients);   
        }
    }  

?>