 <?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Buggy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="bodindex1">
    <header>
        <div class= "nav">
            <img src="assets/logoMB.png" alt="logo" class="logo">
              <div id= hla>
                <a href="#">Home</a>
                <a href="login.php">Login</a>
                <a href="index1.php">Agendamentos</a>
                <a href="logout.php">Sair da Conta 🚪</a>
                <div class= "reserv">
                    <div class="nreserv">
                        <a href="https://api.whatsapp.com/send/?phone=5588999244044&text=Ol%C3%A1%2C+quero+agendar+um+passeio&type=phone_number&app_absent=0">Reservar no Whatsapp</a id=aor> 
                    </div>
            </div>
            
                   
                </div>
              


        </div>
  </header>
   
  <div id="mensagem" class="mensagem-sucesso">Seja bem Vindo <?php echo $_SESSION['email']; ?> </div>



  <div class="imagem1">
  <p>Texto aqui em cima da imagem</p>
</div>
<div class="carousel-container" onmouseover="startCarousel()" onmouseout="stopCarousel()">
  <img id="carousel-image" src="assets/603.webp" alt="b3">
</div>


       


<!-- <h1>Seja bem Vindo <?php echo $_SESSION['email']; ?></h1> -->
<script>
  setTimeout(() => {
    const msg = document.getElementById('mensagem');
    if (msg) {
      msg.classList.add('oculto');
    }
  }, 3000); // 3 segundos

  
</script>
<script src="script.js"></script>

</body>
</html>
