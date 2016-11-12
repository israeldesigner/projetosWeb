<!-- Modal - marcar consulta - home-->
<div class="modal fade" id="modal_novo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-30">
            <div class="p-25">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-theme-colored text-uppercase m-0">Agende uma Consulta</h4>
              <div class="line-bottom mb-30"></div>
              <!-- Appointment Form -->
              <form id="appointment_form_at_home" name="appointment_form_at_home" class="" method="post" action="includes/appointment.php">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Nome" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="email" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Data da consulta" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-10">
                  <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                </div>
                <div class="form-group mb-0 mt-20">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Marcar</button>
                </div>
              </form>
              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#appointment_form_at_home").validate({submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
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

              <div class="tabela-imc">
                <table class="table">
                  <thead>
                    <tr>
                      <th>IMC</th>
                      <th>classificação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Abaixo de 20</td>
                      <td class="nivel nivel-0">Abaixo do Peso</td>
                    </tr>
                    <tr>
                      <td class="">entre 20 e 25</td>
                      <td class="nivel nivel-1">Sobrepeso</td>
                    </tr>
                    <tr>
                      <td>entre 25 e 30</td>
                      <td class="nivel nivel-2">Obesidade Moderada</td>
                    </tr>
                    <tr>
                      <td class="">entre 30 e 35</td>
                      <td class="nivel nivel-3">Obesidade Severa</td>
                    </tr>
                    <tr>
                      <td>entre 35 e 40</td>
                      <td class="nivel nivel-4">Obseidade Mórbida</td>
                    </tr>
                    <tr>
                      <td class="">Acima de 50</td>
                      <td class="nivel nivel-5">Superobesidade</td>
                    </tr>
                  </tbody>
                </table>

              </div>


              <!-- Appointment Form -->
              <form id="form-imc" name="imc" class="" method="post" >
                <div class="row">
                  <div class="form-horizontal">
                    <div class="form-group form-group-sm">
                      <label class="col-sm-1 control-label" for="formGroupInputSmall">Peso</label>
                      <div class="col-sm-11">
                        <input class="form-control" type="text" id="formGroupInputSmall" placeholder="em kg">
                      </div>
                    </div>
                    <div class="form-group form-group-sm">
                      <label class="col-sm-1 control-label" for="formGroupInputSmall">Altura</label>
                      <div class="col-sm-11">
                        <input class="form-control" type="text" id="formGroupInputSmall" placeholder="0,00">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-20 text-right">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Calcular</button>
                  </div>
                </div>
              </form>
              <!-- Claculo Imc-->
              <script type="text/javascript">
              </script>
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


