
<?php
  session_start();
//  $_SESSION['id'] 
//  $_SESSION['nome'] 
//  $_SESSION['email'] 
//  $_SESSION['nivel'] 

if ((!isset($_SESSION['id']) == true ) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email'])) && (!isset($_SESSION['nivel'])) ) 
{
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../site/assets/bootstrap/dist/css/bootstrap.css">
    <title>Restrita</title>
  </head>

  <body style="background-color:#f8f8ff;">
   <!-- Imagem e texto -->
   <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php"> <img src="../site/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item active">
                <a class="nav-link" href="index.php">Página Restrita - Sistema de Login  <span class="sr-only"></span></a>
              </li>

            </ul>
          </div>
        </nav>
        <br>
    
<section class ="container">
  <section class="container-sm p-3 my-3 bg-primary text-white">
        <h1> Bem Vindo a Página Restrita, <?php echo $_SESSION['nome'];?> </h1>
  </section>
</section>
<!-- Alteração não Feita no video na linha 54 e arquivo processa_login_para_nota.php-->
<a type="button"  class="btn btn-success btn-lg " href="processa_login_para_nota.php" aria-pressed="true"  role="button" > Entrar no Sistema da Nota Fiscal </a>

<a type="button"  class="btn btn-danger btn-lg " href="logout.php" aria-pressed="true"  role="button" > Desconectar do Sistema </a>
</body>

</html>
