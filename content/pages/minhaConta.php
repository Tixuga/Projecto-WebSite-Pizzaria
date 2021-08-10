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
    <h1 class="title">A MINHA CONTA</h1>
    <h2>Bem-vindo(a) <?= $first ?></h2>
    <p>Pode editar ou eliminar aqui a sua conta.</p>
    <?php include('dbSession/selectUtilizador.php');
    ?>
</div>
<?php
}
?>
