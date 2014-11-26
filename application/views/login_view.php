<div class="page-header">
    <h1>Sistema Odontológico</h1>
</div>

<form class="form-signin" role="form" action="<?php echo base_url('index.php/login/process'); ?>" method="post">
    <h2 class="form-signin-heading">Entrada</h2>
    <?php
        if($msg == 1) {
		  echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button> Usuário ou senha inválidos. </div>';
        }
    ?>
    <label for="username" class="sr-only">Login</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Login" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
</form>