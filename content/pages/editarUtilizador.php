<?php 
session_start();
    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }else{
        $id= $_SESSION['id'];
        $email = $_SESSION['email'];
        }
?>
 

<div class="cont">
<h1 class="title">Dados utilizador</h1>

<?php include('db/selectUtilizador.php');?>

</div>