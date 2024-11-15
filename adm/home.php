<?php
    include "topo.php";
?>
  <!-- carrossel -->
  <div id="carouselExampleIndicators" class="carousel slide" style="height: 600px;">
        <div class="carousel-indicators" >
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 100%;">
          <div class="carousel-item active" style="height: 100%; width: 100%;">
            <img src="img/banner.jpg" class="d-block w-100" alt="..." style="height: 100%; background-position: center; background-size: cover;">
          </div>
          <div class="carousel-item" style="height: 100%; width: 100%;">
            <img src="img/banner-ead-grande.jpg" class="d-block w-100" alt="..." style="height: 100%;background-position: center; background-size: cover;">
          </div>
  
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <div  style="display: flex; gap: 80px; justify-content:center; margin-top: 100px;">
           <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/python.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">é frequentemente a escolha preferida para quem busca simplicidade e versatilidade. Com uma sintaxe limpa e fácil de entender, Python é ideal para iniciantes </p>
            </div>
                 </div>
                 <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/c-sharp.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">desenvolvido pela Microsoft, é uma linguagem que brilha no ecossistema Windows. Utilizada principalmente para criar aplicativos desktop e jogos</p>
            </div>
                 </div>
                 <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/c++.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">C++ oferece um controle mais detalhado sobre o hardware e o gerenciamento de memória, sendo a linguagem preferida para desenvolvimento de sistemas</p>
            </div>
                 </div>
       </div>
       <div  style="display: flex; gap: 80px; justify-content:center; margin-top: 100px;">
           <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/python.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">é frequentemente a escolha preferida para quem busca simplicidade e versatilidade. Com uma sintaxe limpa e fácil de entender, Python é ideal para iniciantes </p>
            </div>
                 </div>
                 <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/c-sharp.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">desenvolvido pela Microsoft, é uma linguagem que brilha no ecossistema Windows. Utilizada principalmente para criar aplicativos desktop e jogos</p>
            </div>
                 </div>
                 <div class="card" style="width: 18rem;">
            <a href="carrinho.php"><img src="img/c++.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">C++ oferece um controle mais detalhado sobre o hardware e o gerenciamento de memória, sendo a linguagem preferida para desenvolvimento de sistemas</p>
            </div>
                 </div>
       </div>



<?php
    include "rodape.php";
?>