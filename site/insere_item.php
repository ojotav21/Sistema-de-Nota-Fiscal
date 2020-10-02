<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/site/assets/bootstrap/dist/css/bootstrap.css">
    <title>Item da Nota Fiscal</title>
  </head>
  <body style="background-color:#f8f8ff;">
      <?php
        include 'verifica_login.php';
        include 'conecta.php';
        // esse arquivp deve pegar cada produto selecionado, calcular o sub total de cad item e adcionar
        //  a tabela itns_nf

   
        $nf = $_SESSION['nf'];
        $id_prod = $_POST['produto_opcao'];
        $qtde_prod = $_POST['qtde'];

      // echo "Cód Produto:".$id_prod . "<br>";
      // echo "qtde:".$qtde_prod . "<br>";


        $consulta = "SELECT preco,nome FROM produtos WHERE id='$id_prod'";
        $consulta = $conexao ->query($consulta);
        $linha = $consulta -> fetch_assoc();
        $preco = $linha['preco'];
        $nome = $linha['nome'];

        // echo "Valor Unitário: R$".$preco . "<br>";
  
        $subtotal = $preco * $qtde_prod;
  
      ?>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Início <span class="sr-only">(Página atual)</span></a>
                </li>
             
                <li class="nav-item active">
                  <a class="nav-item nav-link disabled" href="#"> | <?php  echo "<b> Numero da Nota Fiscal: ". $nf . "</b> ";?> | </span></a>
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
      <form action="insere_item_nf.php" method="POST" class="col-form-label">
      <label><h5> Id do Produto: </h5> <label> 
        <input type="text" name ="id_prod" value="<?php echo $id_prod?>" readonly ="readonly" class= form-control>
        <br>

        <label><h5> Produto: </h5> <label> 
        <input type="text" name ="nome_prod" value="<?php echo $nome?>" readonly ="readonly" class= form-control>
        <br>

        <label><h5> Valor Unitário: </h5> <label> 
        <input type="text" name ="valor_unit" value="<?php echo $preco?>" readonly ="readonly" class= form-control>
        <br>

        <label><h5> Quantidade: </h5> <label> 
         <input type="text" name = "qtde" value="<?php echo $qtde_prod?>" readonly ="readonly" class= form-control>
        <br>

        <label><h5> SubTotal: </h5> <label> 
        <input type="text" name = "subtotal" value="<?php echo $subtotal?>" readonly ="readonly" class= form-control>
    
        <br>
        <input type="submit" value ="Adicionar Produto" class = " btn btn-success">
      </form>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>