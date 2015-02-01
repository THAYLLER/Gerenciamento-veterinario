<?php include('htmlIni.php');?>
<?php include('menu.php');?>
<div class="container">
<div class="row"><div class="col-xs-12"></div></div>
	<div class="row">
		<div class="col-xs-12">
		<div class="col-xs-4"></div>
	        <div class="col-xs-6">
	            <img src="../img/servico.png" class="img-responsive">
	        </div>
	        <div class="col-xs-3"></div>
	    </div>
	</div>
</div>
<div class="row">
    <div class="row form-group">
        <div class="col-xs-4"></div>
            <div class="col-xs-4">
               <label for="Atendente">Atendente</label>
                <input type="text" value="" class="form-control" name="atendente" maxlength="200">
                <label for="pet">Pet</label>
                <input type="text" value="" class="form-control" name="atendente" maxlength="200">
                <label for="dono_pet">Dono do pet</label>
                <input type="text" value="" class="form-control" name="atendente" maxlength="200">
                <label for="servico">Serviço</label>
                <input type="text" value="" class="form-control" name="servico" maxlength="200">
               <label for="horario">Horario</label>
                <input type="text" value="" class="form-control" name="horario" maxlength="200">
               <label for="ticket">Ticket</label>
                <input type="text" value="" class="form-control" name="ticket" maxlength="200">
                <div class="col-xs-4"></div>
                <div class="col-xs-4"></div>
                <div class="col-xs-12">
                    <label for="status">Status</label>
                     <select class="formcontrol" name="" id="dose">
                        <option value="">- Selecionar -</option>
                        <option value="confirmao">Confirmado</option>
                        <option value="nao_confirmado">Nao confirmado</option>
                     </select>
                </div>
                 <div class="col-xs-4"></div>
                 <input type="button" class="btn btn-lg btn-block btn btn-info" value="CADASTRAR">
            </div>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>	
<?php include('footer.php');?>