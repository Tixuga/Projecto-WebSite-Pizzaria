<?php
session_start();
include('db.php');

$name = $_POST['form-name'];
$description = $_POST['form-description'];
$categoria = $_POST['form-categoria'];
$tamanho = $_POST['form-tamanho'];
$preço = $_POST['form-preço'];

$sql = "INSERT INTO `produtos`(`name`, `description`, `id_categorias`, `tamanho`, `preco`) VALUES ('$name','$description','$categoria','$tamanho','$preço')";

if ($conn->query($sql) === TRUE) {
  echo "Produto registado, a ser redirecionado.";
  header('refresh:2;url=../backoffice.php?p=addProduto');
} else {
  echo "Erro. Produto não registado, a ser redirecionado.";
  echo "Error: " . $sql . "<br>" . $conn->error;
  /* header('refresh:2;url=../backoffice.php?p=addProduto'); */
}

$conn->close();
?>