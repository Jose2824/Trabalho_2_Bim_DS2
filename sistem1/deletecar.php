 <?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

require "conexao1.php";
$sql= " DELETE FROM carros WHERE ID = :ID ";
$resultado = $conexao1->prepare($sql);
$resultado->bindValue(":ID",$ID);
$resultado->execute();
header("location: index1.php");
?> 