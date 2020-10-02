<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "aula_php";

    $conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if($conexao -> connect_error){
        echo "Erro na Conexão!";
    }
    else{
        // echo "Conectado ao Banco de Dados: $banco";
        // echo"<br>";
    }
?>