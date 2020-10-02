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
  <body style="background-color:#f8f8ff; ">
  <?php
    include 'verifica_login.php';
    ?>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Projeto interdisciplinar - Nota Fiscal  <span class="sr-only">(Página atual)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="ver_nf.php"> Ver Notas Emitidas <span class="sr-only">(Página atual)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="cad_pd.php"> Cadastrar um Produto <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                <a class="nav-link btn btn-danger " href="limpandotudo.php" role="button" > Desconectar  </a>
              </li>

              </ul>

            </div>
          </nav>
            <h1 class ="p-3 mb-2 bg-primary text-white text-center"> Produtos Cadastrados </h1> 
 <!-- inicio do php -->
            <?php

            include 'conecta.php';
            $consulta = "SELECT * FROM produtos";

            foreach($conexao -> query($consulta) as $linha){

            ?>
            <br>
        <hr class="p-1 mb-1 bg-dark text-white">
        <br>
        <section class="container text-center">
        <div class="row">
            <div class="col-sm">
              <label><h5>Id: </h5> <label> 
                <input type="text" value="<?php echo $linha['id']?>" readonly ="readonly" class= form-control>
            </div>

            <div class="col-sm">
                <label><h5> Nome: </h5> <label>
                <input type="text"  value="<?php echo $linha['nome']?>" readonly ="readonly" class= form-control>
                <br>
            </div>

            <div class="col-sm">
                <label><h5> Valor Total: </h5> <label> 
                <input type="text"  value="<?php echo $linha['preco']?>" readonly ="readonly" class= form-control>
            </div>

          </form>
        </div>
      </section>
    <?php  
            } 
    ?>
  
    <hr class="p-1 mb-1 bg-dark text-white">
<br>

  <div class="container text-center">
    <p> <a href = "index.php"  class ="btn btn-primary btn-lg btn-block" role ="button"> Voltar ao Inicio </a> </p>
    <link rel="stylesheet" href="/site/assets/bootstrap/dist/css/bootstrap.css">
  </div>
<br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>