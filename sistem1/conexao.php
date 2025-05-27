<?php
$servername = "localhost";
$user = "root";
$pass = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=crud", $user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOexception $erro){
        echo "nao deu certo" . $erro->getMessage();

}