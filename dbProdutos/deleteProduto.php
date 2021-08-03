<?php
session_start();
include('dbProdutos/db.php'); //mudar

$id = $_SESSION['id'];

// sql to delete a record
$sql = "DELETE FROM utilizador WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  echo "Conta eliminada com sucesso, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=logout');
} else {
  echo "Erro. Conta não eliminada, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=minhaConta');
}

$conn->close();
?>