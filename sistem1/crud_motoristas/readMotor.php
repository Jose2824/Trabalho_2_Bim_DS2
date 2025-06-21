<?php 
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
 require '../conexao1.php';
$sql= " SELECT * FROM motoristas";
$resultado = $conexao1->prepare($sql);
$resultado->execute();
$motoristas = $resultado->fetchall(PDO:: FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="../style.css">
<body>
   

     <header>
        <div class= "nav">
            <img src="../assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="index.php">Home</a>
                <a href="../index1.php">Meus Carros</a>
                <a href="../agendamentos.php">Agendamentos</a>
                <a href="../index.php">Voltar para Clientes</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
              


        </div>
  </header>






   <div class="cad_motor">
        <h1>Cadastro de Motorista</h1>
        <form action="create2.php" method="post">
            <label for="nome">Nome do Motorista</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required  class= input>
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required  class= input>
            <br>
            <label for="cnh">CNH</label>
            <br>
            <input type="text" id="cnh" name="cnh" placeholder="Digite sua CNH " required  class= input>
            <br>
            <label for="cep">CEP do Motorista</label>
            <br>
            <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required  class= input>
            <br>
            <label for="data_nasc">Data de Nascimento</label>
            <br>
            <input type="date" id="data_nasc" name="data_nasc" placeholder="Digite sua Data de nascimento" required  class= input>
            <br>
            <label for="email">Digite um e-mail</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Digite um email" required  class= input>
            <br>
            <label for="senha">Digite uma Senha</label>
            <br>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Cadastrar Veículo" class= "cad">
            </div>
            
        </form>
         
    </div>

<?php

if (count($motoristas) > 0){ ?>
     <table>
         <caption>Motoristas do Sistema</caption>
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>CPF</th>
                 <th>CNH</th>
                 <th>CEP</th>
                 <th>Data de Nascimento</th>
                 <th>email</th>
                 <th>Ações</th>
             </tr>
         </thead>
           <tbody>
           
         <?php foreach ($motoristas as $motorista){
              echo"<tr>";
                echo"<td>". $motorista['id']. "</td>"; 
                echo"<td>". $motorista['nome']. "</td>"; 
                echo"<td>". $motorista['cpf']. "</td>"; 
                echo"<td>". $motorista['cnh']. "</td>"; 
                echo"<td>". $motorista['cep']. "</td>"; 
                echo"<td>". $motorista['data_nasc']. "</td>";
                echo"<td>". $motorista['email']. "</td>"; 
                echo"<td>
                    <form method='POST' action='deleteMotor.php' onsubmit='return confirm(\"Tem certeza que deseja excluir este registro?\");'>
                        <input type='hidden' name='id' value='" .$motorista['id'] ."'/> 
                        <input type='hidden' name='placa' value='" .$motorista['cpf'] ."'/> 
                        <button type = 'submit' class= 'btn'>Deletar</button>
                    </form>
                    <a href='formEditM.php?id=" . $motorista['id'] . "' id='edit'>Editar</a>
                   </td>";
                    
              echo"</tr>";
  
 }
}
 ?>
           </tbody>