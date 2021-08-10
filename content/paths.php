<?php
//isset - verifica se o 'p' existe nos urls
if(isset($_GET['p'])){ //GET = metodo de uma super global do php
    $p = $_GET['p']; 

    if($p == 'home')
        include('content/pages/home.php');
    else if($p == 'sobreNos')
        include('content/pages/sobreNos.php');
    else if($p == 'menu')
        include('content/pages/menu.php');
    else if($p == 'contactos')
        include('content/pages/contactos.php');
    else if($p == 'login')
        include('content/pages/login.php');
    else if($p == 'pedir')
        include('content/pages/pedir.php');
    else if($p == 'logout')
        include('content/pages/logout.php');
    else if($p == 'registar')
        include('content/pages/registar.php');
    else if($p == 'minhaConta')
        include('content/pages/minhaConta.php');
    else if($p == 'editar')
        include('content/pages/editarUtilizador.php');
    else if($p == 'backOffice')
        include('content/pages/BackOffice/backOffice.php');
    else if($p == 'addProduto')
        include('content/pages/BackOffice/addProduto.php');
    else if($p == 'editarProduto')
        include('content/pages/BackOffice/editarProduto.php');
    else if($p == 'listaProduto')
        include('content/pages/BackOffice/listaProduto.php');
    else
        include('content/pages/404.php');
}else{
    include('content/pages/home.php');
}

?>