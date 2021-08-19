<?php
session_start();
include('db.php');

$sql = "SELECT * FROM utilizador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<div class="cont">
    <h1 class="title">LISTA UTILIZADORES</h1>
<a href="backoffice.php?p=backOffice"><button type="button" class="btn btn-warning">Voltar</button></a>
<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">CONTACTO</th>
          <th scope="col">ENCOMENDAS</th>
        </tr>
      </thead> 
      <tbody>

    <?php

    // output data of each row
    while ($row = $result->fetch_assoc()) {
    ?>
          <tr>
            <th scope="row"><input type="text" name="id" value="<?=$row['id_utilizador']; ?>"hidden><?=$row['id_utilizador']; ?></th>
            <td><?= $row['firstname']." ". $row['lastname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['contact'] ?></td>
            <td><input type="submit" name="historico" value="Ver Historico"></td>
          </tr>        
 <?php }
  ?></tbody>
  </table> 
  </div>
  <?php
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>