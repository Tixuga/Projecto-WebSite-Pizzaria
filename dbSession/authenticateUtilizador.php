<?php
include('db.php');
 
$email = $_POST['form-email'];
$pwd = $_POST['form-password'];
 
$sql = "SELECT * FROM utilizador WHERE email ='$email' AND password ='$pwd'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
 
  /*Utilizador existente */
    session_start();
    $_SESSION['id'] = $row['id_utilizador'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['first'] = $row['firstname'];
    
    header('Location: ../index.php?p=minhaConta');
 
} else {
 
    echo "Utilizador inexistente. Por favor registe-se.";
    //para ele redirecionar para outra página passados x segundos
    header('refresh:5;url=../index.php?p=registar');
    
}
$conn->close();
?>