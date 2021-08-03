<?php
include('dbProdutos/db.php'); //mudar

$id = $_SESSION['id'];

$sql = "SELECT * FROM utilizador WHERE id_utilizador = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1){

$row = $result->fetch_assoc();
?>

<form method="post">
  <input type="text" class="form-control" id="form-id" name="form-id" value="<?=$row['id']?>" hidden>
        <div class="mb-3">
            <label for="form-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="form-email" name="form-email" value="<?=$row['email'];?>">
        </div>
        <div class="mb-3">
            <label for="form-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="form-password" name='form-password' value="<?=$row['password'];?>">
        </div>
        <button type="submit" formaction="index.php?p=home" class="btn btn-warning">Voltar</button>
        <button type="submit" formaction="dbSession/updateUtilizador.php" class="btn btn-warning">Editar</button>
        <button type="submit" formaction="dbSession/deleteUtilizador.php" class="btn btn-warning">Eliminar</button>
    </form>

<?php
} else {
  echo "0 results";
}
$conn->close();
?>