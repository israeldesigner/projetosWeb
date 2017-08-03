<!-- Modal - marcar consulta - home-->
<div class="modal fade" id="modal_novo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-30">
            <div class="mb-15">
              <button type="button" class="close vermelho" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div>
              <?php include('consulta.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal - termina consulta - home -->

<!-- Modal - calculo do IMC - home-->
<div class="modal fade" id="modal_imc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-30">
            <div class="p-25">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-theme-colored text-uppercase m-0">Cálculo IMC</h4>
              <div class="line-bottom mb-30"></div>

              <div class="tabela-imc" id="tabelaImc">
                <table class="table">
                  <thead>
                    <tr class="azul-padrao">
                      <th>IMC</th>
                      <th>classificação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="nivel-0" class="nivel">
                      <td>Abaixo de 19</td>
                      <td class="nivel">Abaixo do Peso</td>
                    </tr>
                    <tr id="nivel-1" class="nivel">
                      <td class="">entre 20 e 25</td>
                      <td class="nivel">Normal</td>
                    </tr>
                    <tr id="nivel-2" class="nivel">
                      <td>entre 25 e 30</td>
                      <td class="nivel">Obesidade Moderada</td>
                    </tr>
                    <tr id="nivel-3" class="nivel">
                      <td class="">entre 30 e 35</td>
                      <td class="nivel">Obesidade Severa</td>
                    </tr>
                    <tr id="nivel-4" class="nivel">
                      <td>entre 35 e 40</td>
                      <td class="nivel">Obseidade Mórbida</td>
                    </tr>
                    <tr id="nivel-5" class="nivel">
                      <td class="">Acima de 50</td>
                      <td class="nivel">Superobesidade</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- form-imc -->
              <form id="form-imc" name="imc" class="form-contato azul-padrao" >
                <div class="row">
                  <div class="form-horizontal">
                    <div class="form-group form-group-sm">
                      <label class="col-sm-1 control-label" for="form-peso">Peso</label>
                      <div class="col-sm-11">
                        <input class="form-control" type="text" required id="form-peso" placeholder="em kg">
                      </div>
                    </div>
                    <div class="form-group form-group-sm">
                      <label class="col-sm-1 control-label" for="form-altura">Altura</label>
                      <div class="col-sm-11">
                        <input class="form-control" type="text" id="form-altura" placeholder="0,00">
                      </div>
                    </div>
                    <div class="form-group form-group-sm">
                      <label class="col-sm-1 control-label" for="form-altura">Resultado</label>
                      <div class="col-sm-11">
                        <input class="form-control" type="text" id="form-resultado" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-20 text-right">
                    <button type="reset"  id="btn-resetImc" class="btn btn-default" >Reniciar</button>
                    <button type="button"  id="btn-calcImc" class="btn btn-primary" >Calcular</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal - termina calculo IMC - home -->

<!-- Modal - exame/Endoscopia -->
<div class="modal fade" id="modal_preparo_end" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-30">
            <div class="p-25">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-theme-colored text-uppercase m-0">Preparo Exame Endoscopia</h4>
              <div class="line-bottom mb-30"></div>
              <!-- endoscopia-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal - termina preparo endoscopia - exame/Endoscopia -->

<div class="modal fade bs-example-modal-lg" id="modal_termo_end" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content p-30">
            <div class="p-25">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-theme-colored text-uppercase m-0">Termo consentimento Endoscopia</h4>
              <div class="line-bottom mb-30">
                   <iframe src="http://www.gastronortece.com.br/lib/termoendo.pdf" width="100%" height="780" style="border: none;"></iframe>
              </div>
              <!-- endoscopia-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal - termina preparo colonoscopia- exame/Colonoscopia -->

<div class="modal fade bs-example-modal-lg" id="modal_termo_colono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content p-30">
            <div class="p-25">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-theme-colored text-uppercase m-0">Termo consentimento Endoscopia</h4>
              <div class="line-bottom mb-30">
                   <iframe src="http://www.gastronortece.com.br/lib/termocolono.pdf" width="100%" height="780" style="border: none;"></iframe>
              </div>
              <!-- endoscopia-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
