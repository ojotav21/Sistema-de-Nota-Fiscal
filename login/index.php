
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../site/assets/bootstrap/dist/css/bootstrap.css">
    <title>Login</title>
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
                <a class="nav-link" href="index.php">Login - Sistema da Nota Fiscal  <span class="sr-only"></span></a>
              </li>

            </ul>
          </div>
        </nav>
        <br>
    <section class ="container">
        <h5 class="bg-info text-dark">email de teste: admin@admin.com</h5>
        <h5 class="bg-info text-dark">senha de teste: admin</h5>
    </section>
<section class ="container">
    <section class="container-sm p-3 my-3 bg-dark text-white"></div>
        <h2 class="p-3 mb-2 bg-warning text-dark">Login</h2>
        <form action="processa_login.php" method="POST">

            <div class="form-group">
                <label><h5> Digite o seu melhor Email</h5> <label> 
                <input type ="text" name="email" class="form-control">
                <small class="form-text text-muted text-white-50">Não compartilhe seu email com ninguém</small>
        </div>

            <div class="form-group">
            <label><h5> Digite a sua senha</h5> <label> 
            <input type ="password" name = "senha" class="form-control">
            <small class="form-text text-muted text-white-50">Não compartilhe sua senha com ninguém</small>
            </div>

            <button type="submit" class="btn btn-success btn-lg" > Entrar </button>
            <small class="form-text text-muted text-white-50">Apenas contas de Nivél tipo 1 conseguem ter acesso ao sistema da nota fiscal</small>
        </form>
    </section>    
</section>

</body>

</html>

