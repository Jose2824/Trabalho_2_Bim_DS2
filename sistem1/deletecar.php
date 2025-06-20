<?php 
require "conexao1.php";
 if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // $placa = $_POST['placa'];
    $sql= " DELETE FROM carros WHERE id = :id ";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindValue(":id",$id);
    $resultado->execute();
        header("location: index1.php");
    
 }
 
 ?>
 
 
 
 
 
 
 