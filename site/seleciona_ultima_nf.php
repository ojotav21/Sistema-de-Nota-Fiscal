<?php
    include 'conecta.php';
    include 'verifica_login.php';
    // echo "<hr>";
    // consulta para selecinar a ultima nota fiscal, a mas recente, a mais recente( aquela que iniciou o sistema)
    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao -> query($consulta);
    $linha = $consulta -> fetch_assoc();
    $ultimo = $linha['ultima'];
    // echo "Nota Fiscal: ".$ultimo."<br>";
    // echo"<hr>";

    // Seria interesante criar uma variavel de sessão
    // Nesse ponto, podemos add varios produtros À ,esma nota fiscal

    // session_start();
    $_SESSION['nf'] = $ultimo;

    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/site/assets/bootstrap/dist/css/bootstrap.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Nota Fiscal</title>
  </head>
  <body style="background-color:#f8f8ff;">
   
     <!-- Imagem e texto -->
     <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> jv</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item active">
                <a class="nav-link" href="index.php"> Projeto interdisciplinar - NotaFiscal  <span class="sr-only">(Página atual)</span></a>
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
    <br>
    <br>
    <div class="container">
            <form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="POST" class="col form-label">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Número Nota Fiscal:</span>
                    </div>
                    <input type ="text" name ="nf" class="form-control" value ="<?php echo $ultimo; ?>">
                   </div>
                </div>
                   
                    <label><h5> Produto: </h5></label> 
                            <select name ="produto_opcao" id="produto_opcao" class = "form-control">

                            <?php
                                // Cria um select vom todos os prodtuos para o user escolher algum.
                                $consulta ="SELECT * FROM produtos";
                                foreach ($conexao -> query($consulta)as $linha){
                            ?>

                        
                                <option value ="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>

                            <?php
                                }
                            ?>
                            </select>
                    
                            <br>
                            <label><h5> Quantidade: </h5></label> 
                        <input type ="text" name="qtde" class="form-control">
                    

                            <br>
                            <input type = "submit" value =" Adicionar" class="btn btn-success">
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>