<h1 class="ui dividing header">Sistema Odontológico</h1>

<div class="ui form">
	<form class="form-signin" role="form" action="<?php echo base_url('index.php/login/process'); ?>" method="post">
	    <!-- <h2 class="form-signin-heading">Entrada</h2> -->
	    <?php
	        if($msg == 1) {
			  echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button> Usuário ou senha inválidos. </div>';
	        }
	    ?>
	    <div class="required field">
	    	<label for="username" class="sr-only">Login</label>
	    	<div class="ui icon input">
	    		<input type="text" id="username" name="username" class="form-control" placeholder="Login" required autofocus>
	    		<i class="user icon"></i>
	    	</div>
	    </div>
	    <div class="required field">
	    	<label for="password" class="sr-only">Password</label>
	    	<div class="ui icon input">
	    		<input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
	    		<i class="lock icon"></i>
	    	</div>
	    </div>
	    <button class="ui blue button" type="submit">ENTRAR</button>
	</form>
</div>