<?php
session_start();
include('db.php'); //mudar

$id = $_SESSION['id'];
$id_produto = $row['id_produtos'];
// sql to delete a record
$sql = "DELETE FROM produtos WHERE id_produtos = $id_produto";

if ($conn->query($sql) === TRUE) {
  echo "Conta eliminada com sucesso, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=logout');
} else {
  echo "Erro. Conta não eliminada, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=minhaConta');
}

$conn->close();
?>