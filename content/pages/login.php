<div class="cont">
<h1 class="title">LOGIN</h1>
<form method="post">
    <div class="mb-3">
        <label for="form-email" class="form-label" style="color: white;">Email</label>
        <input type="email" class="form-control" id="form-email" name="form-email">
    </div>
    <div class="mb-3">
        <label for="form-password" class="form-label" style="color: white;">Password</label>
        <input type="password" class="form-control" id="form-password" name="form-password">
    </div>
    <button type="submit" formaction="dbSession/authenticateUtilizador.php" class="btn btn-warning">Entrar</button>
</form>
</div>
