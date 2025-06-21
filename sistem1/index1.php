 <?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
 require 'conexao1.php';
$sql= " SELECT * FROM carros";
$resultado = $conexao1->prepare($sql);
$resultado->execute();
$carros = $resultado->fetchall(PDO:: FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="style.css">
<body>
   

     <header>
        <div class= "nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="crud_motoristas/readMotor.php">meus Motoristas</a>
                <a href="logout.php">Voltar para Clientes</a>
                <a href="logout.php">Sair da Conta 🚪</a>
            </div>
              


        </div>
  </header>

    <div class="form">
        <h1>Cadastro de Veículo</h1>
        <form action="create1.php" method="post">
            <label for="modelo">Modelo do Veículo</label>
            <br>
            <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo" required  class= input>
            <br>
            <label for="ano">Ano</label>
            <br>
            <input type="text" id="ano" name="ano" placeholder="Digite o ano" required  class= input>
            <br>
            <label for="status">Status do Veículo</label>
            <br>
            <input type="text" id="status" name="status" placeholder="Status" required  class= input>
            <br>
            <label for="cor">Cor do Veículo</label>
            <br>
            <input type="text" id="cor" name="cor" placeholder="Digite a cor" required  class= input>
            <br>
            <label for="placa">Placa</label>
            <br>
            <input type="text" id="placa" name="placa" placeholder="Digite a placa" required  class= input>
            <br>
            <div class= "button">
            <input type="submit" value="Cadastrar Veículo" class= "cad">
            </div>
            
        </form>
         
    </div>


   <?php 


if (count($carros) > 0){ ?>
     <table>
         <caption>Seus Carros</caption>
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Modelo</th>
                 <th>Ano</th>
                 <th>Status</th>
                 <th>Cor</th>
                 <th>Placa</th>
                 <th>Ações</th>
             </tr>
         </thead>
           <tbody>
           
         <?php foreach ($carros as $carro){
              echo"<tr>";
                echo"<td>". $carro['id']. "</td>"; 
                echo"<td>". $carro['modelo']. "</td>"; 
                echo"<td>". $carro['ano']. "</td>"; 
                echo"<td>". $carro['status']. "</td>"; 
                echo"<td>". $carro['cor']. "</td>"; 
                echo"<td>". $carro['placa']. "</td>"; 
                echo"<td>
                    <form method='POST' action='deletecar.php' onsubmit='return confirm(\"Tem certeza que deseja excluir este registro?\");'>
                        <input type='hidden' name='id' value='" .$carro['id'] ."'/> 
                        <input type='hidden' name='placa' value='" .$carro['placa'] ."'/> 
                        <button type = 'submit' class= 'btn'>Deletar</button>
                    </form>
                    <a href='formEdit.php?id=" . $carro['id'] . "' id='edit'>Editar</a>
                   </td>";
                    
              echo"</tr>";
  
 }
 ?>
           </tbody>

        

             <!-- <a href="formEdit.php?ID=<?php echo $carro['id']; ?>" id="edit"   >Editar|</a>
             <form method="POST" action="deletecar.php" onsubmit="return confirm('Tem certeza que deseja excluir este registro?');">
                 <input type="hidden" name="ID" value="<?= htmlspecialchars($carro['id']) ?>"/> 
                 <button type="submit" class="btn">
                     <p>Deletar</p>
                 </button> -->
             </form>
             </a>
         </td>
     </tr>


     </table>
<?php
 }else{
    echo "<h1>Nenhum Veículo cadastrado.</h1>";
 }
 ?>


</body>
</html>