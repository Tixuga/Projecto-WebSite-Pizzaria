<?php 
session_start();

    if(!isset($_SESSION['id'])){
        header('Location: ../../index.php?p=login');
    }else{
        $id = $_SESSION['id'];
        $email = $_SESSION['email'];
        }
?>
<div class="cont">
    <h1 class="title">A MINHA CONTA</h1>
    <h2>Bem-vindo <?=$email;?></h2>
    
        <?php include('dbSession/selectAllUtilizador.php');
        ?> 
</div>