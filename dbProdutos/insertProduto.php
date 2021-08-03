<?php
include('dbProdutos/db.php'); //mudar

$name = $_POST['form-name'];
$description = $_POST['form-description'];
$categoria = $_POST['form-categoria'];
$tamanho = $_POST['form-tamanho'];
$preço = $_POST['form-preço'];

$sql = "INSERT INTO `products`(`name`, `description`, `id_categorias`, `tamanho`, `preço`) VALUES ('$name','$description','$categoria','$tamanho','$preço')";

if ($conn->query($sql) === TRUE) {
  echo "Produto registado, a ser redirecionado.";
  session_start();
  header('refresh:2;url=../index.php?p=login');
} else {
  echo "Erro. Produto não registado, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=registar');
}

$conn->close();
?>