<?php
include 'verifica_login.php';
include 'conecta.php';
echo "<br>";
session_start();
$nf = $_SESSION['nf'];
$id_produto = $_POST['id_prod'];
$qtde = $_POST['qtde'];
$subtotal = $_POST['subtotal'];
// Mostrar iten selecionado e insere na tabela itens_nf
// pede confirmação se quer adicionar mais itens

echo "NF ->" .$nf . "<br>";
echo "ID_PRODUTO ->" .$id_produto ."<br>";
echo "QTDE ->".$qtde. "<br>";
echo "SUBTOTAL ->" .$subtotal ."<br>";

$consulta = $conexao -> prepare(
    "INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal) VALUES('$id_produto','$nf','$qtde','$subtotal')"
);

$consulta -> execute();
header('Location: confirma_item.php')
?>