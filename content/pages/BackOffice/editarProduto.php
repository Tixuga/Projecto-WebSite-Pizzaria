<?php 
session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../../index.php?p=login');
    }
?>

<div class="cont">
   
<h1 class="title">Editar Produto</h1>
<?php include('dbProdutos/selectProduto.php');?>

<a href="backoffice.php?p=listaProduto"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>