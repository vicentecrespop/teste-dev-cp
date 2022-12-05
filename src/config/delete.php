<?php
    require './config.php';

    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
    }

    $msg = '{"msg": "Usuário deletado com sucesso!"}';
    echo json_encode($msg);
?>