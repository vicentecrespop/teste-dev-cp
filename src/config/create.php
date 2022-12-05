<?php
    require './config.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['nome'])) {

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, cep, rua, numero, complemento, bairro, cidade, estado) VALUES (:nome, :sobrenome, :cep, :rua, :numero, :complemento, :bairro, :cidade, :estado)");
        $sql->bindParam(':nome', $_POST['nome']);
        $sql->bindParam(':sobrenome', $_POST['sobrenome']);
        $sql->bindParam(':cep', $_POST['cep']);
        $sql->bindParam(':rua', $_POST['logradouro']);
        $sql->bindParam(':numero', $_POST['numero']);
        $sql->bindParam(':complemento', $_POST['complemento']);
        $sql->bindParam(':bairro', $_POST['bairro']);
        $sql->bindParam(':cidade', $_POST['cidade']);
        $sql->bindParam(':estado', $_POST['estado']);
        $sql->execute();

        $msg = '{"msg": "Usuário inserido com sucesso!"}';
        echo json_encode($msg);

    }
?>