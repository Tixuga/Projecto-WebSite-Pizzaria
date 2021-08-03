<?php
include('dbProdutos/db.php'); //mudar

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<div id="listaProdutos" class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">ID</div>
        <div class="col">NOME</div>
        <div class="col">DESCRIÇÃO</div>
        <div class="col">CATEGORIA</div>
        <div class="col">TAMANHO</div>
        <div class="col">PREÇO</div>
    </div>

<?php

  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <form action="content/pages/editarUtilizador.php?id=<?=$row['id'];?>" method="post">
      <div class="row mt-2">
        <div class="col">
          <button type="submit">Selecionar</button>
      </div>
        <div class="col"><?=$row['id'];?></div>
        <div class="col"><?=$row['email'];?></div>
        <div class="col"><?=$row['password'];?></div>
        </form>
    </div>

    <?php
  }
  echo"</div>";
} else {
  echo "0 results";
}
$conn->close();
?>
