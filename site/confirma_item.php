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
  //Confirma_item.php
  //dps do Body

    include 'conecta.php';
      
      $nf = $_SESSION['nf'];
    
      $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";
      $total = 0;
    

    ?>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Início<span class="sr-only">(Página atual)</span></a>
                </li>
                  <li class="nav-item active">
                    <a class="nav-item nav-link disabled" href="#"> | <?php  echo "<b> Numero da Nota Fiscal: ". $nf . "</b>";?> | </span></a>
                  </li>
                  <li class="nav-item active">
                  <a class="nav-link" href="ver_nf.php"> Ver Notas Emitidas <span class="sr-only">(Página atual)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="ver_pd.php"> Ver Produtos Cadastrados <span class="sr-only"></span></a>
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
  
  <section class="container text-center">

        <br>
        <nav class="col-form-label">

        <?php
          foreach($conexao -> query($consulta) as $linha){   

            $subtotal = $linha['subtotal'];
    
        ?>
        <label><h5> Código do Produto: </h5> <label> 
          <input type="text" value="<?php echo $linha['cod_produto']?>" readonly ="readonly" class= form-control>
          <br>

          <label><h5> Quantidade: </h5> <label> 
          <input type="text"  value="<?php echo $linha['qtde']?>" readonly ="readonly" class= form-control>
          <br>

          <label><h5> SubTotal: </h5> <label> 
          <input type="text"  value="<?php echo $linha['subtotal']?>" readonly ="readonly" class= form-control>
        </nav>
  
      
  <?php
    $total = ($total + $subtotal); }
  ?>
  <br>
  <br>
        <label><h5 class="mb-2 bg-warning" > Total: </h5> <label> 
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
            </div>
          <input type="text"value="<?php echo $total; ?>" readonly ="readonly" class= form-control>
          <br>
        </div>
        <br>
        <p class ="mb-2 bg-info text-white" style ="border-radius: 5px;" > O que  deseja fazer?</p>
        <br>
        <p><a href = "seleciona_ultima_nf.php" class ="btn btn-primary" role ="button"> Inserir outro produto </a> </p>
        <p><a href = "finalizar.php?total=<?php echo $total; ?>" class ="btn btn-success" role ="button"> Finalizar Nota Fiscal</a> </p>
        </section >
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>