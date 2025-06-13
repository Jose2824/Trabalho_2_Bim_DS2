<?php
    require_once 'conexao2.php';
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $cnh = $_POST["cnh"];
    $cor = $_POST["cor"];
    $placa = $_POST["placa"];
    
    if (isset($_POST["modelo"]) && $modelo != "") {
        try {
        $stmt = $conexao1->prepare("INSERT INTO carros ( modelo,ano,status, cor,placa) VALUES
        (:modelo,:ano,:status,:cor,:placa)");
        $stmt->bindValue(":modelo", $modelo);
        $stmt->bindValue(":ano", $ano);
        $stmt->bindValue(":status", $status);
        $stmt->bindValue(":cor", $cor);
        $stmt->bindValue(":placa", $placa);

        if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
        echo" Dados cadastrados com sucesso!";
        $id = null;
        $modelo = null;
        $ano = null;
        $status = null;
        $cor = null;
        $placa = null;
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