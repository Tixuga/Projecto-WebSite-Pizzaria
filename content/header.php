<?php
session_start(); ?>
<header>
  <!--NAV-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="nav-flex">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php?p=home">Página
              Principal</a>
            <a class="nav-link" aria-current="page" href="index.php?p=sobreNos">Sobre Nós</a>
            <a class="nav-link" href="index.php?p=menu">Menu</a>
            <a class="nav-link" href="index.php?p=contactos">Contactos</a>
          </div>
        </div>
      </div>
      <?php //Conditions to define what the user sees, depending on their user type
      if (isset($_SESSION['id'])) {
        if ($_SESSION['tipoUser'] == 1) {
      ?><a href="backoffice.php?p=backOffice"><button type="button" class="btn btn-warning">BackOffice</button></a><?php
       }
        ?><a href="index.php?p=pedir"><button type="button" class="btn btn-warning">Fazer Pedido</button></a>
        <a href="index.php?p=minhaConta"><button type="button" class="btn btn-warning">Minha Conta</button></a>
        <a href="backoffice.php?p=logout"><button type="button" class="btn btn-warning">Logout</button></a>
      <?php


      } else {
      ?><a href="index.php?p=login"><button type="button" class="btn btn-warning">Login</button></a>
        <a href="index.php?p=registar"><button type="button" class="btn btn-warning">Registar</button></a>
      <?php
      }
      ?>
    </div>
  </nav>
</header>