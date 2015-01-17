<?php include('htmlIni.php');?>
<?php include('menu.php');?>

<div class="container">
    <div class="row">
        <div class="col-xs-4">
            <div class="col-xs-6">
                <img src="../img/cadastro_animais.png" class="img-responsive">
            </div>
            <div class="col-xs-6">
               <label class="nome"> de paciêntes</label>
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
        <div class="col-xs-2"></div>
        <div class="row form-group">  
            <div class="col-xs-8">
                <label for="nome_completo">Nome</label>
                <input type="text" value="" class="form-control" name="nome" maxlength="200">
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class=" col-xs-8">
                <label for="text" >Nome do dono</label>
                <input type="text" value="" class="form-control" name="dono" maxlength="100">
            </div> 
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-8">
                <label for="text" >Nome do Veterinario</label>
                <input type="text" value="" class="form-control" name="veterinario" maxlength="100">
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-4">
                <label>Raça</label>
                <input type="text" value="" class="control" name="raca" maxlength="100">
            </div>
            <div class="col-xs-4">
                <label class="lbl">Especie</label>
                <input type="text" value="" class="control" name="especie" maxlength="100">
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-4">
                <label>Cor</label>
                <input type="text" value="" class="control " name="cor" maxlength="100">
            </div>
            <div class="col-xs-4">
                <label class="alg">Peso</label>
                <input type="text" value="" class="control" name="peso" maxlength="100">
            </div>
        </div>
        <div class="col-xs-2"></div>
         <div class="row form-group">
            <div class="col-xs-4">
                <label>Sexo</label>
                <select class="formcontrol">
                    <option>Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>
            <div class="col-xs-4">
               <label>Cobertura</label>
                <select class="formcontrol">
                  <option>Selecione</option>
                  <option>Sim</option>
                  <option>Não</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-4">
               <label>Pedigree</label>
                <select class="formcontrol">
                  <option>Selecione</option>
                  <option>Sim</option>
                  <option>Não</option>
                </select>   
            </div>
            <div class="col-xs-4">
               <label>Nascimeto</label>
                <input type="text" value="" class="formcontrols data" id="data2" name="peso" maxlength="100">
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-8">
                <a href="CartilhaVacinacao.php">Cartilha de vacinação do paciênte</a>
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="row form-group">
            <div class="col-xs-8">
                <label>Observações</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <input type="button" class="btn btn-lg btn-block btn btn-info" value="CADASTRAR">
            </div>
            <div class="col-xs-4"></div>
        </div>  
    </div>
</div>
<?php include('footer.php');?>