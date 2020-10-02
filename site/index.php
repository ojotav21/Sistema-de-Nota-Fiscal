<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/site/assets/bootstrap/dist/css/bootstrap.css">
    <title>Nota Fiscal</title>
  </head>
  <body style="background-color:#f8f8ff;">
    <?php
    include 'verifica_login.php';
    ?>
        <!-- Imagem e texto -->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="#"> <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item active">
                <a class="nav-link" href="#"> Projeto interdisciplinar - Nota Fiscal  <span class="sr-only"></span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link btn btn-danger " href="limpandotudo.php" role="button" > Desconectar  </a>
              </li>
            </ul>
          </div>
        </nav>
        
        <h1 class ="bg-success text-center text-white">Bem Vindo!</h1>
  <section class ="container">
    <br>
      <br>
        <h1 >Inicie Uma venda</h1>

                <form action="data_nf.php" method="POST" class="form-group">
                <div class="form-group">
                    <p> Ao Clicar em Iniciar uma Venda, o sistema irá gerar uma nova nota fiscal</p>
                    <input type="submit" value="Iniciar uma Venda" class="btn btn-warning">
                </div>
                </form>
  
          <br>
      <h1> Outras Opções</h1>
      
      <p><a href = "ver_nf.php" class ="btn btn-primary" role ="button"> Ver Notas Emitidas</a></p>
      <p><a href = "ver_pd.php" class ="btn btn-secondary" role ="button"> Ver Produtos Cadastrados</a></p>    
      <p><a href = "cad_pd.php" class ="btn btn-info" role ="button"> Cadastrar um Produtos</a></p>
          <!--Alteração feita na linha 52  --> 
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>