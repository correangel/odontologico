<div class="page-header">
	<h2><?php echo $headline; ?></h2>
</div>
<br>
<div class="table-responsive">
	<table id="tabela"
		class="table-responsive table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th data-column-id="commands" data-formatter="commands"	data-sortable="false">Opções</th>
				<th data-column-id="id" data-type="numeric">ID</th>
				<th data-column-id="login" data-order="asc">Login</th>
				<th data-column-id="perfil">Perfil</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $usuarios->result () as $usuario ) :
				echo '<tr>';
				echo '<td></td>';
				echo '<td>' . $usuario->id_usuario . '</td>';
				echo '<td>' . $usuario->login . '</td>';
				echo '<td>' . $usuario->nome_perfil . '</td>';
				echo '</tr>';
			endforeach
			;
			?>
	  </tbody>
	</table>
</div>

<script>
$(document).ready(function(){ 
	var grid = $("table").bootgrid({
		formatters: {
        "commands": function(column, row)
        {
            return "<button type=\"button\" class=\"btn btn-xs btn-default command-activate\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-ok\"></span></button> ";
        }
    }
}).on("loaded.rs.jquery.bootgrid", function()
{
    grid.find(".command-activate").on("click", function(e)
    {
    	window.location.replace("ativa/" + $(this).data("row-id"));
    });
});
});
</script>