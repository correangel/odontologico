<form role="form" action="<?php echo base_url('index.php/odontograma/create'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="row">
		<div class="form-group col-xs-2">
			<label for="dataOdontograma">Data da consulta</label>
	    	<input type="date" value="<?php echo date('Y-m-d'); ?>" id="dataOdontograma" name="dataOdontograma" class="form-control" required>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 id="odontograma">
		
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-xs-12">
			<label for="descricao">Histórico</label>
			<textarea rows="10" cols="40" class="form-control"></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-2">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</div>
	</div>
	
</form>