<div class="container">

	<form class="form-signin" role="form"
		action="<?php echo base_url('index.php/login/process'); ?>"
		method="post">
		<h2 class="form-signin-heading">Sistema Odontológico</h2>
		<?php
			if ($msg == 1) {
				echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button> Usuário ou senha inválidos. </div>';
			}
		?>
		<label for="username" class="sr-only">Login</label> 
		<input type="text" name="username" id="username" class="form-control" placeholder="Login" required autofocus> 
		<label for="password" class="sr-only">Senha</label> 
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
		<!-- <div class="checkbox">
			<label> <input type="checkbox" value="remember-me"> Remember me
			</label>
		</div> -->
		<button class="btn btn-primary btn-block" type="submit">Entrar</button>
	</form>

</div> <!-- /container -->