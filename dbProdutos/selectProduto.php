<?php
include('db.php'); //mudar

$id = $_SESSION['id'];
$idProduto = $row['id_produtos'];

$sql = "SELECT * FROM produtos WHERE id_produtos = $idProduto";
$result = $conn->query($sql);
die('ups' . $row['id_produtos']);

if ($result->num_rows == 1){

$row = $result->fetch_assoc();
?>

<form method="post">
  <input type="text" class="form-control" id="form-id" name="form-id" value="<?=$row['id_produtos']?>" hidden>
        <div class="mb-3">
        <label for="form-name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="form-name" name="form-name" aria-describedby="form-name" value="<?=$row['name'];?>">
        </div>
        <div class="mb-3">
        <label for="description" class="form-description">Descrição</label>
            <textarea class="form-control" id="form-description" name="form-description" rows="3" value="<?=$row['description'];?>">
        </div>
        <select class="form-select" id="form-categoria" name="form-categoria" aria-label="Default select example">
                <option selected value="<?=$row['description'];?>">Categoria</option>
                <option value="1">Pão de Alho</option>
                <option value="2">Saladas</option>
                <option value="3">Massas</option>
                <option value="4">Lasanhas</option>
                <option value="5">Kebab</option>
                <option value="6">Calzones</option>
                <option value="7">Pizzas</option>
            </select>   
        <select class="form-select" aria-label="Default select example" name="form-tamanho">
        <option selected>Tamanho</option>
        <option value="não aplicável">Não aplicável</option>
        <option value="mini">Mini</option>
        <option value="pequeno">Pequeno</option>
        <option value="médio">Médio</option>
        <option value="familiar">Familiar</option>
        </select>
        <div class="mb-3">
            <label for="form-preço" class="form-label">Preço</label>
            <input type="number" step=".01" class="form-control" id="form-preço" name="form-preço" aria-describedby="form-preço" value="<?=$row['name'];?>">
        </div>
        <button type="submit" formaction="index.php?p=home" class="btn btn-warning">Voltar</button>
        <button type="submit" formaction="dbSession/updateUtilizador.php" class="btn btn-warning">Editar</button>
    </form>

<?php
} else {
  echo "0 results";
}
$conn->close();
?>