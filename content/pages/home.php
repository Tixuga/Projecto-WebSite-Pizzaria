<?php 
session_start();
?>

<main>
    <!--CONTEUDO-->
    <div class="cont">
      <!--LOGO-->
      <img id="logo" src="Images/Logo/Sabor2.svg" alt="">
      <p id="frase">Pizzas Sabor Tropical são qualquer coisa de divinal!</p>
      <!--BUTTON-->
      <button type="button" id="btn-tele" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Peça já!</button>
      <!--MODAL-->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Peça já!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Pode encomendar diretamente connosco através do nosso contacto telefónico, ou se preferir, pode fazer uma
              encomenda pelo Já Chegou e ter a sua comida entregue diretamente na sua localização.
            </div>
            <div class="modal-footer">
              <a href="index.php?p=contactos"><button type="button" class="btn btn-primary"
                  data-bs-dismiss="modal">Ligar</button></a>
              <a href="index.php?p=pedir"><button type="button" class="btn btn-primary"
                  data-bs-dismiss="modal">Online</button></a>
              <a href="https://maia.jachegou.pt/collections/pizzaria-sabor-tropical-2" target=new><button type="button"
                  class="btn btn-warning">Pedir pelo Já Chegou</button></a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!--SOCIAL LINKS-->
      <div id="social-icons">
        <a href="https://www.tripadvisor.pt/Restaurant_Review-g1154790-d7942500-Reviews-Pizzaria_sabor_tropical-Trofa_Porto_District_Northern_Portugal.html"
          target="_blank"><i class="fab fa-tripadvisor fa-2x"></i></a>
        <a href="https://www.facebook.com/Pizzaria-Sabor-Tropical-451509211558936/" target="_blank"><i
            class="fab fa-facebook fa-2x"></i></a>
      </div>
    </div>
