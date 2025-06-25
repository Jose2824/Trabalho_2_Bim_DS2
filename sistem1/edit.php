<?php
require "conexao1.php";


if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $status = $_POST['status'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];

    try {

        $sql = "UPDATE carros SET modelo = :modelo, ano = :ano, status = :status, cor = :cor, placa = :placa WHERE id = :id";
        $stmt = $conexao1->prepare($sql);


        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':placa', $placa);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


        if ($stmt->execute()) {
            echo "<h2>Veículo atualizado com sucesso!</h2>";
            echo "<a href='index1.php'>Voltar para a lista</a>";
        } else {
            echo "<h2>Erro ao atualizar o veículo.</h2>";
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "<h2>ID não especificado para edição.</h2>";
}
?>
