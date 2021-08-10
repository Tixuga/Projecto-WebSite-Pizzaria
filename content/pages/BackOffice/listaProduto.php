<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../../index.php?p=login');
} else {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    ?> 
          <?php include('dbProdutos/selectAllProduto.php'); ?> 
<?php
}
?>
