<?php 
session_start();

    if(!isset($_SESSION['id'])){
        header('Location: ../../index.php?p=login');
    }else{
        $id = $_SESSION['id'];
        $email = $_SESSION['email'];
        $first = $_SESSION['first'];
        }
?>
<div class="cont">
    <h1 class="title">FAZER PEDIDO</h1>
    <p>O que vai querer <?=$first?>?</p>
    <select class="form-select" aria-label="Default select example">
        <option selected>Categoria</option>
        <option value="1">Pão de Alho</option>
        <option value="2">Saladas</option>
        <option value="3">Massas</option>
        <option value="4">Lasanhas</option>
        <option value="5">Kebab</option>
        <option value="6">Calzones</option>
        <option value="7">Pizzas</option>
    </select>   
    <select class="form-select" aria-label="Default select example">
        <option selected>Qual Pão de Alho?</option>
        <option value="1">Simples</option>
        <option value="2">Com queijo mozzarella</option>
        <option value="3">Com queijo mozzarella e molho de tomate</option>
        <option value="4">Com queijo mozzarella, bacon e molho de tomate</option>
    </select>   
    <select class="form-select" aria-label="Default select example">
        <option selected>Qual Salada?</option>
        <option value="1">Salada mista</option>
        <option value="2">Salada de atum</option>
        <option value="3">Salada de delícias do mar</option>
        <option value="4">Salada de tomate e mozzarella</option>
    </select>   
    <select class="form-select" aria-label="Default select example">
        <option selected>Qual Massa?</option>
        <option value="1">Bolonhesa gratinada</option>
        <option value="2">Carbonara</option>
    </select>   
    <select class="form-select" aria-label="Default select example">
        <option selected>Qual Lasanha?</option>
        <option value="1">Lasanha à bolonhesa</option>
        <option value="2">Lasanha de frango</option>
    </select>   
</div>