<?php 
require "../conexao1.php";
 if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql= " DELETE FROM motoristas WHERE id = :id ";
    $resultado = $conexao1->prepare($sql);
    $resultado->bindValue(":id",$id);
    $resultado->execute();
        header("location: readMotor.php");
    
 }
 
 ?>