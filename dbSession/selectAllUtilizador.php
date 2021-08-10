<?php
session_start();
include('db.php');

$sql = "SELECT * FROM utilizador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

  <div id="contasUser" class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col">ID</div>
      <div class="col">Email</div>
      <div class="col">Password</div>
    </div>

    <?php

    // output data of each row
    while ($row = $result->fetch_assoc()) {
    ?>
      <form action="content/pages/editarUtilizador.php?id=<?= $row['id']; ?>" method="post">
        <div class="row mt-2">
          <div class="col">
            <button type="submit">Selecionar</button>
          </div>
          <div class="col"><?= $row['id']; ?></div>
          <div class="col"><?= $row['email']; ?></div>
          <div class="col"><?= $row['password']; ?></div>
        </div>
      </form>


  <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>