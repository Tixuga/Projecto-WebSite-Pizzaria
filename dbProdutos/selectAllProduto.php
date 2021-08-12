<?php
session_start();
include('db.php');

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
?> 
<div class="cont">
    <h1 class="title">LISTA PRODUTOS</h1>
<a href="backoffice.php?p=backOffice"><button type="button" class="btn btn-warning">Voltar</button></a>
<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">DESCRIÇÃO</th>
          <th scope="col">CATEGORIA</th>
          <th scope="col">TAMANHO</th>
          <th scope="col">PREÇO</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead> 
      <tbody>
        
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        ?>
        <form action="backoffice.php?p=editarProduto" method="post">
          <tr>
            <th scope="row"><input type="text" name="idProduto" value="<?=$row['id_produtos']; ?>"hidden><?=$row['id_produtos']; ?></th>
            <td><?= $row['name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['id_categorias'] ?></td>
            <td><?= $row['tamanho'] ?></td>
            <td><?= $row['preco'] ?></td>
            <td><input type="submit" name="edit" value="Editar"></td>
            <!-- <td><a href="content/pages/BackOffice/aproveDelete.php?id=<?php echo $row['id_produtos']; ?>">Apagar</a></td> -->
          </tr>
        </form>
 <?php }
  ?></tbody>
  </table> 
  </div>
  <?php
} else {
  echo "0 results";
}
$conn->close();
}
?>


