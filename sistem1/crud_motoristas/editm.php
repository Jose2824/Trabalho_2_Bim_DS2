<?php
require "../conexao1.php";


if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cnh = $_POST['cnh'];
    $cep = $_POST['cep'];
    $data_nasc = $_POST['data_nasc'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
    try {

        $sql = "UPDATE motoristas SET nome = :nome, cpf = :cpf, cnh = :cnh, cep = :cep, data_nasc = :data_nasc, email = :email, senha = :senha WHERE id = :id";
        $stmt = $conexao1->prepare($sql);


        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':cnh', $cnh);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


        if ($stmt->execute()) {
            echo "<h2>Dados do Motorista atualizado com sucesso!</h2>";
            echo "<a href='readMotor.php'>Voltar para a lista</a>";
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
