<form role="form" action="<?php echo base_url('index.php/dentista/create'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="nome">Nome do dentista</label>
			    	<input type="text" id="nome" name="nome" class="form-control" required>
				</div>
				
				<div class="form-group col-sm-4">
					<label for="telefoneCelular">Telefone Celular</label>
			    	<input type="tel" id="telefoneCelular" name="telefoneCelular" class="form-control telefone">
				</div>
			</div>
		</div>
		<div class="panel-footer">
    		<button type="submit" class="btn btn-primary">Cadastrar</button>
    		<button type="reset" class="btn btn-default">Limpar</button>
	    </div>
	</div>
	
</form>