<?php include('htmlIni.php');?>
<?php include('menu.php');?>
<div class="container">
    
	<div class="row">
        <div class="col-xs-4">
            <div class="col-xs-6">
                <img src="../img/cadastro.png" class="img-responsive">
            </div>
            <div class="col-xs-6">
                <label >de usuário</label>
            </div>
        </div>
        <div class="col-xs-4"></div>
         <div class="col-xs-4">
            <div class="controlBusca">
                <div class="col-xs-2">
                    <button type="submit" class="btn bt "><img src="../img/icone_busca.png" class="img-center" alt="busca class="img-responsive""></button>
                </div>
                <div class="col-xs-8">
                    <input type="text" class="form-control input-medium search-query">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row form-group">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
               <label for="nome_completo">Nome Completo</label>
                <input type="text" value="" class="form-control" name="nome_completo" maxlength="200">
                 <label for="usuario" >Usuario</label>
                 <input type="usuario" value="" class="form-control" name="usuario_principal" maxlength="100">
                <label for="txtSenha">Senha</label>
                <input type="password" class="form-control"  name="txtSenha" autocomplete="off" maxlength="15"><br/>
                <p class="help-block">
                    Escolha uma senha de 8 a 15 caracteres.<br>
                    Recomendamos combinar letras minúsculas com maiúsculas e números.<br>
                    Porém não utilize caracteres especiais como *, $, %, #, etc.
                </p>
                <input type="button" class="btn btn-lg btn-block btn btn-info" value="CADASTRAR">
            </div>
            <div class="col-xs-4"></div>
        </div>
	</div>
</div>	
<?php include('footer.php');?>