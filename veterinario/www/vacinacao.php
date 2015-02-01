<?php include('htmlIni.php');?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<div class="col-xs-3"></div>
	        <div class="col-xs-6">
	            <img src="../img/cadatrovacinas.jpg" class="img-responsive">
	        </div>
	        <div class="col-xs-3"></div>
	    </div>
	</div>
</div>
<div class="row">
    <div class="row form-group">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
           <label for="nome_completo">vacina contra</label>
            <input type="text" value="" class="form-control" name="vacina_contra" maxlength="200">
             <label for="nome_completo">Dose a ser aplicada</label>
             <select name="" id="dose">
                <option value="1ª dose">1ª dose</option>
                <option value="2ª dose">2ª dose</option>
                <option value="3ª dose">3ª dose</option>
                <option value="Reforço anual">Reforço anual</option>
             </select>
             <div class="col-xs-4"></div>
            <input type="button" class="btn btn-lg btn-block btn btn-info" value="CADASTRAR">
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>	
<?php include('footer.php');?>