 <!-- <?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

require "conexao1.php";
$sql= " DELETE FROM carros WHERE id = :id ";
$resultado = $conexao1->prepare($sql);
$resultado->bindValue(":id",$id);
$resultado->execute();
header("location: index1.php");
exit();
}
?>  -->
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

require "conexao1.php";

// Verifica se o ID foi enviado via POST e é um número
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM carros WHERE id = :id";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindValue(":id", $id, PDO::PARAM_INT);
    $resultado->execute();

    header("Location: index1.php");
    exit();
} else {
    echo "ID inválido ou não fornecido.";
}

?>
