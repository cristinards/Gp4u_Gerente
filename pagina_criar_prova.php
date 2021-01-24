<?php require_once "partes/topo.php" ?>

<!-- inicio do conteudo -->
  <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Criar Provas</h1>
        </div>
        <hr>

        <div class="text-center">
            <img src="img/thinking.png" style="max-height: 250px">
            <h4 class="pt-3">Que tipo de prova você deseja criar?</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <br>

       <div class="row text-center ">
            <!-- Botões criar prova -->
            <div class="col-lg-12">
                <a href="criar_provaD.php" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Criar prova discursiva</span>
                </a>

                <a href="criar_provaM.php" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Criar prova multipla escolha</span>
                </a>
            </div>
        </div>
  </div>
  <!-- fim do conteudo -->

<?php require_once "partes/rodape.php" ?>