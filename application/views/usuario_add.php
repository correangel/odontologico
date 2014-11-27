<form class="form-cadastro" role="form" action="<?php echo base_url('index.php/usuario/create'); ?>" method="post">

	<h3 class="form-cadastro-heading"><?php echo $headline ?></h3>
	
	<div class="form-group has-feedback">
		<label for="login" class="sr-only">Login</label>
    	<input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus>
    	<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
    </div>
    
    <div class="form-group has-feedback">
    	<label for="password" class="sr-only">Senha</label>
    	<input type="password" id="password" name="senha" class="form-control" placeholder="Senha" required>
    	<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
    </div>
    
    <div class="form-group">
	    <select name="perfil" class="form-control" required>
	    	<option value="">Escolha um perfil</option>
	    	<option></option>
		    <?php 
			    foreach($perfis->result() as $perfil):
					echo ('<option value="'.$perfil->id_perfil.'">'.$perfil->nome_perfil.'</option>');
				endforeach;
			?>
	    </select>
	</div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
