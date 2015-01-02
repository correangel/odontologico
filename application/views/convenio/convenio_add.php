<form role="form" action="<?php echo base_url('index.php/convenio/create'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="nomeConvenio">Nome do convênio</label>
			    	<input type="text" id="nomeConvenio" name="nomeConvenio" class="form-control" required>
				</div>
				
				<div class="form-group col-sm-2">
					<label for="diaPagamento">Dia de Pagamento</label>
			    	<input type="text" id="diaPagamento" name="diaPagamento" class="form-control">
				</div>
				
				<div class="form-group col-sm-2">
					<label for="desconto">Desconto</label>
					<div class="input-group">
				    	<input type="text" id="desconto" name="desconto" class="form-control">
				    	<div class="input-group-addon">%</div>
			    	</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-sm-2">
					<label for="telefone">Telefone de contato</label>
					<input type="tel" id="telefone" name="telefone" class="form-control telefone">
				</div>
				
				<div class="form-group col-sm-4">
					<label for="contato">Pessoa de contato</label>
					<input type="text" id="contato" name="contato" class="form-control">
				</div>
			</div>
		</div>
		<div class="panel-footer">
    		<button type="submit" class="btn btn-primary">Cadastrar</button>
    		<button type="reset" class="btn btn-default">Limpar</button>
	    </div>
	</div>
	
</form>