 <!-- <?php
session_start();
if (!isset($_SESSION['ID'])) {
    header('Location: login.php');
    exit();
}
if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];

require "conexao1.php";
$sql= " DELETE FROM carros WHERE ID = :ID ";
$resultado = $conexao1->prepare($sql);
$resultado->bindValue(":ID",$ID);
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
if (isset($_POST['ID']) && is_numeric($_POST['ID'])) {
    $ID = intval($_POST['ID']);

    $sql = "DELETE FROM carros WHERE ID = :ID";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindValue(":ID", $ID, PDO::PARAM_INT);
    $resultado->execute();

    header("Location: index1.php");
    exit();
} else {
    echo "ID inválido ou não fornecido.";
}

?>
