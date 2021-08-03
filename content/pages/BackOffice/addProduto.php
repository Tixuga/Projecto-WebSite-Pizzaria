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
    <h1 class="title">NOVO PRODUTO</h1>
    <p>Adicionar um novo produto:</p>

    <form method="post">
        <div class="mb-3">
            <label for="form-name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="form-name" name="form-name" aria-describedby="form-name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-description">Descrição</label>
            <textarea class="form-control" id="form-description" name="form-description" rows="3"></textarea>
        </div>
        <select class="form-select" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="form-categoria">Pão de Alho</option>
                <option value="form-categoria">Saladas</option>
                <option value="form-categoria">Massas</option>
                <option value="form-categoria">Lasanhas</option>
                <option value="form-categoria">Kebab</option>
                <option value="form-categoria">Calzones</option>
                <option value="form-categoria">Pizzas</option>
            </select>   
        <select class="form-select" aria-label="Default select example">
        <option selected>Tamanho</option>
        <option value="form-tamanho">Não aplicavél</option>
        <option value="form-tamanho">Mini</option>
        <option value="form-tamanho">Pequeno</option>
        <option value="form-tamanho">Médio</option>
        <option value="form-tamanho">Familiar</option>
        </select>
        <div class="mb-3">
            <label for="form-preço" class="form-label">Preço</label>
            <input type="number" step=".01" class="form-control" id="form-preço" name="form-preço" aria-describedby="form-preço">
        </div>
        <button type="submit" formaction="dbProdutos/insertProduto.php" class="btn btn-primary">Adicionar</button>
    </form>
</div>
<?php
}
?>
