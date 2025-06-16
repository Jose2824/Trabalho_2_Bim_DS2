<?php
    require_once 'conexao2.php';
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $cnh = $_POST["cnh"];
    $cep = $_POST["cep"];
    $data_nasc = $_POST["data_nasc"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    if (isset($_POST["cpf"]) && $cpf != "") {
        try {
        $stmt = $conexao2->prepare("INSERT INTO motoristas ( nome,cpf,cnh,cep,data_nasc,email,senha) VALUES
        (:nome,:cpf,:cnh,:cep,:data_nasc,:email,:senha)");
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":cpf", $cpf);
        $stmt->bindValue(":cnh", $cnh);
        $stmt->bindValue(":cep", $cep);
        $stmt->bindValue(":data_nasc", $data_nasc);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);

        if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
        echo" Dados cadastrados com sucesso!";
        $id = null;
        $nome = null;
        $cpf = null;
        $cnh = null;
        $cep = null;
        $data_nasc = null;
        $email = null;
        $senha = null;
        header("location: index1.php");
        } else {
        echo "Erro ao tentar efetivar cadastro";
        }
    }else {
        throw new PDOException("Erro: Não foi possível executar a declaração
        sql");
        }
        } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
        }
        }




?>