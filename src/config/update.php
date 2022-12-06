<?php
    require './config.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['id'])) {

        $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, cep = :cep, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, estado = :estado WHERE id = :id");
        $sql->bindParam(':nome', $_POST['nome']);
        $sql->bindParam(':sobrenome', $_POST['sobrenome']);
        $sql->bindParam(':cep', $_POST['cep']);
        $sql->bindParam(':rua', $_POST['logradouro']);
        $sql->bindParam(':numero', $_POST['numero']);
        $sql->bindParam(':complemento', $_POST['complemento']);
        $sql->bindParam(':bairro', $_POST['bairro']);
        $sql->bindParam(':cidade', $_POST['cidade']);
        $sql->bindParam(':estado', $_POST['estado']);
        $sql->bindParam(':id', $_POST['id']);
        $sql->execute();

        $msg = '{"msg": "Usuário atualizado com sucesso!"}';
        echo json_encode($msg);

    }
?>