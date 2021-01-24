<!-- inicio do conteudo -->
<?php require_once "partes/topo.php" ?>

  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="pagina_criar_prova.php" class="btn btn-secondary">
          <i class="fas fa-arrow-left"></i>
        </a>   
    </div>
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Formulário Prova Discursiva</h1>
    </div>
    <hr>
    <br>
          
    <!---INSERIR FORMULARIO ABAIXO -->
    <!-- Horizontal Form -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">Nova prova</h6>
        </div>
        
          <div class="card-body">
            <form>
              <div class="form-group row">
                <div class="col-sm-9">
                  <label for="#" class="#">Titulo</label>
                    <input type="#" class="form-control" id="#" placeholder="Escreva uma questão">
                    </div>
                  </div> 
                
                  <!--exemplo de select-->
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>

                  <!--exemplo de textarea-->
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Exemplo textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                  <!--exemplo de escolher arquivo-->
                  <div class="form-group">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                      </div>
                  </div>

                    <!--botao enviar-->
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </form>
                </div>
     
     
              </div>
              
    </div>

    
  </div>
            

</div>
<!---Container Fluid-->

<!-- fim do conteudo -->
<?php require_once "partes/rodape.php" ?>