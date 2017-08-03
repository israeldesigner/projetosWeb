<form class="form-horizontal form-contato azul-padrao" id="" method="post" action="">
    <fieldset>
        <!-- Form Name -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <legend>Pré Agendamento de consultas</legend>
                </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label" for="cons-nome">Nome</label>
                <div class="col-md-10">
                    <input id="cons-nome"  placeholder="Nome Completo" class="form-control input-md" required type="text">
                </div>
            </div>
        </div>
        <!-- select input-->
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label" for="cepText">Exame</label>
                <div class="col-md-10">
                    <select name="exame" required id="" class="form-control">
                        <option value="1">Endoscopia</option>
                        <option value="2">Colonoscopia</option>
                        <option value="3">CPRE</option>
                        <option value="4">Biópsias</option>
                        <option value="5">laringoscopia</option>
                        <option value="6">Polipectomias</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label" for="telText">Tel .:</label>
                <div class="col-md-10">
                    <input id="telText" name="telText" placeholder="telefone fixo"
                     class="form-control input-md tel-fixo" required type="text">
                </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label" for="telcelText">Tel CEL .:</label>
                <div class="col-md-10">
                    <input id="telcelText" name="telcelText" placeholder="Telefone Celular"
                     class="form-control input-md tel-cell" required type="text">
                </div>
            </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label" for="msgText">Mensagem</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="msgText" name="msgText" row="8"></textarea>
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <div class="">
                <button id="btnEnviaParceiros" name="btnEnviaParceiros"
                class="btn btn-info btnEnviar btn-padrao pull-right">enviar</button>
            </div>
        </div>
    </fieldset>
</form>
