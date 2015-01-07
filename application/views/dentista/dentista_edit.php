<form role="form" action="<?php echo base_url('index.php/dentista/update'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-body">
			<input type="hidden" value="<?php echo $dentista[0]->idDentistas; ?>" name="idDentistas" >
			
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="nome">Nome do dentista</label>
			    	<input type="text" value="<?php echo $dentista[0]->nome; ?>" id="nome" name="nome" class="form-control" required>
				</div>
				
				<div class="form-group col-sm-2">
					<label for="telefoneCelular">Telefone Celular</label>
			    	<input type="tel" value="<?php echo $dentista[0]->telefoneCelular; ?>" id="telefoneCelular" name="telefoneCelular" class="form-control telefone">
				</div>
			</div>
		</div>
		<div class="panel-footer">
    		<button type="submit" class="btn btn-primary">Alterar</button>
    		<button type="reset" class="btn btn-default">Limpar</button>
	    </div>
	</div>
</form>