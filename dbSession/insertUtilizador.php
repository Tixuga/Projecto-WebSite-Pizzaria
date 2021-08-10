<?php
include('db.php');

$pwd = $_POST['form-password'];
$email = $_POST['form-email'];
$tel = $_POST['form-number'];
$first = $_POST['form-firstname'];
$last = $_POST['form-lastname'];

$sql = "INSERT INTO `utilizador`(`password`, `firstname`, `lastname`, `email`, `contact`) VALUES ('$pwd','$first','$last','$email','$tel')";

if ($conn->query($sql) === TRUE) {
  echo "Utilizador registado, a ser redirecionado.";
  session_start();
  header('refresh:2;url=../index.php?p=login');
} else {
  echo "Erro. Utilizador não registado, a ser redirecionado.";
  echo "Error: " . $sql . "<br>" . $conn->error;
/*   header('refresh:2;url=../index.php?p=registar');
 */}

$conn->close();
?>