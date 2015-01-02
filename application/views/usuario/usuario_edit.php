<form role="form" action="<?php echo base_url('index.php/usuario/update'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-body">
			<input type="hidden" name="id_usuario" value="<?php echo $usuario[0]->id_usuario ?>" >
			
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="login">Login</label>
		    		<input type="text" id="login" name="login" value="<?php echo $usuario[0]->login; ?>" class="form-control" placeholder="Login" required autofocus>
		    	</div>
		    	
		    	<div class="form-group col-sm-4">
		    		<label for="password">Senha</label>
		    		<input type="password" id="password" name="senha" value="<?php echo $usuario[0]->senha; ?>" class="form-control" placeholder="Senha" required>
		    	</div>
		    </div>
		    
		    <div class="row">
			    <div class="form-group col-sm-4">
			    	<label for="perfil">Perfil</label>
				    <select name="perfil" class="form-control" required>
				    	<option value="">Escolha um perfil</option>
				    	<option></option>
					    <?php 
						    foreach($perfis->result() as $perfil):
								echo ('<option value="'.$perfil->id_perfil.'"');
									if($perfil->id_perfil == $usuario[0]->perfil)
										echo('selected="selected"');
									echo('>'.$perfil->nome_perfil.'</option>');
							endforeach;
						?>
				    </select>
				</div>
			</div>
		</div>
		<div class="panel-footer">
    		<button type="submit" class="btn btn-primary">Atualizar</button>
    		<button type="reset" class="btn btn-default">Limpar</button>
	    </div>
	</div>
</form>
