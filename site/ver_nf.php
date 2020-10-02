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
                  <a class="nav-link" href="index.php"> Início <span class="sr-only">(Página atual)</span></a>
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
            <h1 class ="p-3 mb-2 bg-primary text-white text-center"> Notas Fiscais Emitidas </h1> 


    <?php
                            // PRimeiro FOreach
                              include 'conecta.php';
                              $consulta = "SELECT * FROM nota_fiscal";

                            foreach($conexao -> query($consulta) as $linha){
                                $nota = $linha['nf'];
                        
                            
                        
      ?>
      </section>
        <hr class="p-1 mb-1 bg-dark text-white">
          <br>
          <section class="container text-center">
            <div class="col-form-label">
              <div class="">
                <label><h5>Nota Fiscal: </h5> <label> 
                <input type="text" value="<?php echo$linha['nf']?>" readonly ="readonly" class= form-control>
              </div>

               <div class="">
                  <label><h5> Data: </h5> <label>
                  <input type="text"  value="<?php echo $linha['data']?>" readonly ="readonly" class= form-control>
              </div>

              <div class="">
                  <label><h5> Valor Total: </h5> <label> 
                  <input type="text"  value="<?php echo $linha['valor_total']?>" readonly ="readonly" class= form-control>
              </div>
        <br>
    <h3 class=" text-center bg-warning"> Itens da Nota Fiscal</h3>
    <br>
                            <?php
                            // Segundo ForEach
                                    $consulta2 = "SELECT * FROM itens_nf WHERE num_nf ='$nota'";
                                    foreach($conexao -> query($consulta2) as $linha2){
                                      $codigo = $linha2['cod_produto']; 
                                      // Terceiro ForEach
                                      $consulta3 = "SELECT * FROM produtos WHERE id ='$codigo'";
                                      foreach($conexao -> query($consulta3) as $linha3){ 
                              ?>
              <div class="row">
                <div class="col-sm">
                  <label><h5> Id Produto: </h5> <label> 
                    <input type="text" value="<?php echo$linha2['id']?>" readonly ="readonly" class= form-control>
                </div>

                <div class="col-sm">
                    <label><h5>Cód Produto: </h5> <label>
                    <input type="text"  value="<?php echo $linha2['cod_produto']?>" readonly ="readonly" class= form-control>
                    <br>
                </div>
                                    <?php 
                                      //  foreach3
                                        }
                                        ?>

                <div class="col-sm">
                    <label><h5>Nome</h5> <label> 
                    <input type="text"  value="<?php echo $linha3['nome']?>" readonly ="readonly" class= form-control>
                </div>
                <div class="col-sm">
                    <label><h5>Valor Unitário</h5> <label> 
                    <input type="text"  value="<?php echo $linha3['preco']?>" readonly ="readonly" class= form-control>
                </div>

                <div class="col-sm">
                  <label><h5> Quantidade: </h5> <label> 
                    <input type="text" value="<?php echo$linha2['qtde']?>" readonly ="readonly" class= form-control>
                </div>

                <div class="col-sm">
                    <label><h5>Subtotal: </h5> <label>
                    <input type="text"  value="<?php echo $linha2['subtotal']?>" readonly ="readonly" class= form-control>
                    <br>
                </div>
          </div>
          <br>

          <hr class="p-1 mb-1 bg-warning text-white">
          <br>
          <?php
          // chave for each 2
          }
          ?>

    <?php
    // chave for each 1
    }
    ?>

              </form>
            </div>
    </section>

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