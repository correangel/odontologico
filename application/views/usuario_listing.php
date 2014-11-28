<div class="page-header">
	<h2><?php echo $headline; ?></h2>
</div>
<br>
<div class="table-responsive">
	<table id="tabela"
		class="table table-condensed table-hover table-striped">
		<thead>
			<tr>
				<th data-column-id="commands" data-formatter="commands"
					data-sortable="false">Opções</th>
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
				// echo '<td>' . anchor('usuario/edit/' . $usuario->id_usuario, '<span class="glyphicon glyphicon-pencil"></span>') . '</td>';
				// echo '<td>' . anchor('usuario/inativa/' . $usuario->id_usuario, '<span class="glyphicon glyphicon-minus"></span>') . '</td>';
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
            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-pencil\"></span></button> " + 
                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
        }
    }
}).on("loaded.rs.jquery.bootgrid", function()
{

    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
    	//window.location("http://localhost/odontologico/index.php/usuario/edit/" + $(this).data("data-row-id"));
    	window.location.replace("edit/" + $(this).data("row-id"));
    }).end().find(".command-delete").on("click", function(e)
    {
    	window.location.replace("inativa/" + $(this).data("row-id"));
    });
});
});
</script>