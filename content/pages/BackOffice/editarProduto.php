<?php 
session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../../index.php?p=login');
    }else{
        $id= $_SESSION['id'];
        $email = $_SESSION['email'];
        }
?>
 

<div class="cont">
<h1 class="title">Editar Produto</h1>

<?php include('dbProduto/selectProduto.php');?>

<a href="backoffice.php?p=backOffice"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>