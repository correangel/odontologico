<form class="form-cadastro" role="form" action="<?php echo base_url('index.php/usuario/update'); ?>" method="post">

	<h3 class="form-cadastro-heading"><?php echo $headline ?></h3>
	
	<input type="hidden" name="id_usuario" value="<?php echo $usuario[0]->id_usuario ?>" >
	
	<div class="form-group has-feedback">
		<label for="login" class="sr-only">Login</label>
    	<input type="text" id="login" name="login" value="<?php echo $usuario[0]->login; ?>" class="form-control" placeholder="Login" required autofocus>
    	<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
    </div>
    
    <div class="form-group has-feedback">
    	<label for="password" class="sr-only">Senha</label>
    	<input type="password" id="password" name="senha" value="<?php echo $usuario[0]->senha; ?>" class="form-control" placeholder="Senha" required>
    	<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>
    
    <div class="form-group">
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
    
    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>
