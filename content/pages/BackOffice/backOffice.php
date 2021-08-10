<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../../index.php?p=login');
} else {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $first = $_SESSION['first'];
    ?>
<div class="cont">
    <h1 class="title">BACKOFFICE</h1>
    <h2>Bem-vindo(a) <?= $first ?></h2>
    <p>O que pretende fazer?</p>
    <a href="backoffice.php?p=listaProduto"><button type="submit" class="btn btn-warning">Lista de Produtos</button></a>
    <a href="backoffice.php?p=addProduto"><button type="submit" class="btn btn-warning">Add Produto</button></a>
</div>
<?php
}
?>
