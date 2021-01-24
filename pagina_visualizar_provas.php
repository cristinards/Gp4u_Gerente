<?php require_once "partes/topo.php" ?>

 <!-- inicio do conteudo -->
<div class="container-fluid">

  <!--visualizar provas inicio -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Visualizar Provas</h1>
    </div>
    <hr>  

  <div class="row">
    <div class="col-sm-6">
    <div class="card">
        <div class="card-body">
        <img class="card-img-top" src="img/thinking.png" alt="#">
          <h5 class="card-title">Provas Descritivas</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="visualizar_provaD.php" class="btn btn-primary">Visualizar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
    <div class="card">
        <div class="card-body">
        <img class="card-img-top" src="img/thinking.png" alt="#">
          <h5 class="card-title">Provas Multipla Escolha</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="visualizar_provaM.php" class="btn btn-primary">Visualizar</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!--visualizar provas fim -->

  <!--avaliar provas inicio -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Avaliar Provas</h1>
  </div>
  <hr>  
        
     <div class="card-deck">
          <div class="card bg-primary">
              <div class="card-body text-center">
              <p class="card-text">Texto</p>
              </div>
          </div>
          <div class="card bg-primary">
              <div class="card-body text-center">
              <p class="card-text">Texto</p>
              </div>
          </div>
          <div class="card bg-primary">
              <div class="card-body text-center">
              <p class="card-text">Texto</p>
              </div>
          </div>
          <div class="card bg-primary">
              <div class="card-body text-center">
              <p class="card-text">Texto</p>
              </div>
          </div>
      </div>  
    <!--avaliar provas fim -->  
</div>
<!-- fim do conteudo -->

<?php require_once "partes/rodape.php" ?>