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



<?php /*

	echo form_open('usuario/create', 'class="form-cadastro"');
	
	echo heading($headline, 3, 'class="form-cadastro-heading"');
	echo br();
	
	echo form_input('login', '', 'title="Login do usuário no sistema" class="input-block-level input-large" placeholder="Login" required');
	echo br();
	
	echo form_password('senha', '', 'title="Senha para o usuário" class="input-block-level input-large" placeholder="Senha" required');
	echo br();
	
	echo ('<select name="setor" title="Setor que o usuário está alocado" class="input-block-level input-large" required>');
	echo ('<option value="">Setor</option>');
	foreach($setores->result() as $setor):
		echo ('<option value="'.$setor->id_setor.'">'.$setor->nome_setor.'</option>');
	endforeach;
	echo ('</select>');
	
	echo ('<select name="perfil" title="Perfil do usuário no sistema" class="input-block-level input-large" required>');
	echo ('<option value="">Perfil</option>');
	foreach($perfis->result() as $perfil):
		echo ('<option value="'.$perfil->nivel.'">'.$perfil->nome_perfil.'</option>');
	endforeach;
	echo ('</select>');
	echo br();
	
	echo form_submit('', 'Cadastrar', 'class="btn btn-primary"'); 
	echo form_close();
	
/* End of file usuario_add.php */
/* Location: ./system/application/views/usuario_add.php */