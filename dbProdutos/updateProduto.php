<?php
session_start();
include('db.php');

$idProduto = $_POST['form-idProduto'];
$name = $_POST['form-name'];
$description = $_POST['form-description'];
$categoria = $_POST['form-categoria'];
$tamanho = $_POST['form-tamanho'];
$preço = $_POST['form-preço'];


$sql = "UPDATE produtos SET name='$name',description='$description',id_categorias='$categoria',tamanho='$tamanho',preco='$preço' WHERE id_produtos = $idProduto";

if ($conn->query($sql) === TRUE) {
  echo "$idProduto.||.$name.||.$description.||.$categoria.||.$tamanho.||.$preço";
  echo "Produto editado com sucesso, a ser redirecionado.";
  header('refresh:6;url=../backoffice.php?p=listaProduto');
} else {
  echo "Erro. Produto não editado, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=minhaConta');
}

$conn->close();
?>