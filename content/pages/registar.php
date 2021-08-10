<div class="cont">
<h1 class="title">REGISTAR</h1>
<form method="post">
<div class="mb-3">
        <label for="form-firstname" class="form-label" style="color: white;">Primeiro Nome</label>
        <input type="text" class="form-control" id="form-firstname" name="form-firstname">
    </div>
    <div class="mb-3">
        <label for="form-lastname" class="form-label" style="color: white;">Apelido</label>
        <input type="text" class="form-control" id="form-lastname" name="form-lastname">
    </div>
    <div class="mb-3">
        <label for="form-email" class="form-label" style="color: white;">Email</label>
        <input type="email" class="form-control" id="form-email" name="form-email">
    </div>
    <div class="mb-3">
        <label for="form-password" class="form-label" style="color: white;">Password</label>
        <input type="password" class="form-control" id="form-password" name="form-password">
    </div>
    <div class="mb-3">
        <label for="form-number" class="form-label" style="color: white;">Telemóvel</label>
        <input type="number" class="form-control" id="form-number" name="form-number">
    </div>
    <button type="submit" formaction="dbSession/insertUtilizador.php" class="btn btn-warning">Registar</button>
</form>
</div>