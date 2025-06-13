<?php

try {
    // Conexão com o banco de dados
    $conexao1 = new PDO("mysql:host=localhost;dbname=MB;charset=utf8mb4", "root", "",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
}

// Verifica se um ID foi passado via GET
if (!isset($_GET['ID'])) {
    die("ID não especificado.");
}

$ID = (int) $_GET['ID'];

// Verifica se o formulário foi enviado (atualização)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $ano    = $_POST['ano'];
    $status = $_POST['status'];
    $cor    = $_POST['cor'];
    $placa  = $_POST['placa'];

    // Usando a conexão correta ($conexao1)
    $stmt = $conexao1->prepare("UPDATE carros SET modelo = :modelo, ano = :ano, status = :status, cor = :cor, placa = :placa WHERE id = :id");
    $stmt->execute([
        ':modelo' => $modelo,
        ':ano'    => $ano,
        ':status' => $status,
        ':cor'    => $cor,
        ':placa'  => $placa,
        ':id'     => $id
    ]);

    echo "Carro atualizado com sucesso! <a href='index.php'>Voltar</a>";
    exit;
}

// Busca os dados do carro atual (apenas se o ID for válido)
$stmt = $conexao1->prepare("SELECT * FROM carros WHERE id = :id");
$stmt->execute([':id' => $id]);
$carro = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$carro) {
    die("Carro não encontrado.");
}
?>
