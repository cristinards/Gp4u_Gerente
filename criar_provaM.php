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
      <h1 class="h3 mb-0 text-gray-800">Formulário Prova Multipla Escolha</h1>
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
                      <label for="exampleFormControlSelect1">Exemplo select</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>

                   <!--exemplo de checkbox-->
                    <div class="form-group">
                      <label>Checkbox</label>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Checkbox 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                          <label class="custom-control-label" for="customCheck3">Checkbox 2</label>
                        </div>
                    </div>

                    <!--exemplo de radio button-->
                    <div class="form-group">
                      <label>Radio Button</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Radio 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Radio 2</label>
                      </div>
                    </div>

                    <!--exemplo de switches-->
                    <div class="form-group">
                      <label>Switches</label>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">switch 1</label>
                      </div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">switch 2</label>
                      </div>
                    </div>

                  <br>
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
  <!---Container Fluid-->

<!-- fim do conteudo -->
<?php require_once "partes/rodape.php" ?>