<?php
session_start();
include('db.php'); //mudar


$name = $_POST['form-name'];
$description = $_POST['form-description'];
$categoria = $_POST['form-categoria'];
$tamanho = $_POST['form-tamanho'];
$preço = $_POST['form-preço'];


$sql = "UPDATE `produtos` SET `name`='$name',`description`='$description',`id_categorias`='$categoria',`tamanho`='$tamanho',`preco`='$preço'";

if ($conn->query($sql) === TRUE) {
  echo "Produto editado com sucesso, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=home');
} else {
  echo "Erro. Produto não editado, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=minhaConta');
}

$conn->close();
?>