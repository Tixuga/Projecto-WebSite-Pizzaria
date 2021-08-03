<?php
session_start();
include('db.php');

$email=$_POST['form-email'];
$pwd=$_POST['form-password'];
$id = $_SESSION['id'];

$sql = "UPDATE utilizador SET email='$email', password='$pwd' WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  echo "Conta editada com sucesso, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=home');
} else {
  echo "Erro. Conta não editada, a ser redirecionado.";
  header('refresh:2;url=../index.php?p=minhaConta');
}

$conn->close();
?>