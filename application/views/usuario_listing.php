<div class="page-header">
	<h2><?php echo $headline; ?></h2>
</div>
<br>
<div class="table-responsive">
	<table id="tabela" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Editar</th>
				<th>Inativar</th>
				<th>Login</th>
				<th>Perfil</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($usuarios->result() as $usuario):
					echo '<tr>';
					echo '<td>' . anchor('usuario/edit/' . $usuario->id_usuario, '<span class="glyphicon glyphicon-pencil"></span>') . '</td>';
					echo '<td>' . anchor('usuario/inativa/' . $usuario->id_usuario, '<span class="glyphicon glyphicon-minus"></span>') . '</td>';
					echo '<td>' . $usuario->login . '</td>';
					echo '<td>' . $usuario->nome_perfil . '</td>';
					echo '</tr>';
				endforeach;			
			?>
	  </tbody>
	</table>
</div>
