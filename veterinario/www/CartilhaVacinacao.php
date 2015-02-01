<?php include('htmlIni.php');?>
<?php include('menu.php');?>
<div class="container">
	<div class="col-xs-4"></div>
	 <div class="row">
        <div class="col-xs-4">
        	<h3>Cartilha de vacinação</h3>
        </div>
	</div>	
	<div class="row">
        <div class="col-xs-4">
        	<h4><label for="Paciente">Paciênte: </label><label for="paciente">Animal x</label></h4>
        </div>
	</div>	
	<div class="row">
		<div class="col-xs-2">
			<nav>
			  <ul class="nav nav-pills nav-stacked span2 menu">
			    <li><a class="aa a" href="cadastroPaciente.php">VOLTAR</a></li>
			    <li><a class="aa a" href="#" onclick="popUP('vacinacao.php', 'vacinas', 'width=470,height=300,toolbar=no,menubar=no,status=no,scrollbars=yes,resizable=yes');">VACINAR</a></li>
			  </ul>
			</nav>
        </div>
		<div class="col-xs-8">
			<div class="fixed-table-header" style="height: 37px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); margin-right: 0px;">
				<table class="table table-hover" style="width: 796px;">
					<thead>
				        <tr>
				        	<th style="">
					        	<div class="th-inner ">Vacina contra</div>
					        	<div class="fht-cell" style="width: 150px;">
					        	</div>
					        </th>
					        <th style="">
					        	<div class="th-inner ">1ª dose</div>
					        	<div class="fht-cell" style="width: 150px;"></div>
					        </th>
					        <th style="">
						        <div class="th-inner ">2ª dose</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
					    	<th style="">
						        <div class="th-inner ">3ª dose</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
					    	<th style="">
						        <div class="th-inner ">Reforço anual</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
						</tr>
						<tr>
				        	<th style="">
					        	<div class="th-inner ">Teste</div>
					        	<div class="fht-cell" style="width: 150px;">
					        	</div>
					        </th>
					        <th style="">
					        	<div class="th-inner ">Teste</div>
					        	<div class="fht-cell" style="width: 150px;"></div>
					        </th>
					        <th style="">
						        <div class="th-inner ">Teste</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
					    	<th style="">
						        <div class="th-inner ">Teste</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
					    	<th style="">
						        <div class="th-inner ">Teste</div>
						        <div class="fht-cell" style="width: 150px;"></div>
					    	</th>
						</tr>
				    </thead>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	function popUP(nome, url, settings){
	    var  w, h, left, top
	    
	    w=screen.width
	    h=screen.height    
	        
	    left=(w-470)/2
	    top=(h-300)/2
	    settings+=", left="+left+", top="+top
		window.open('vacinacao.php', 'vacinas', settings);
	}
</script>
<?php include('footer.php');?>
