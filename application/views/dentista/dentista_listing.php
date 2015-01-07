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
				<th data-column-id="nome" data-order="asc">Nome</th>
				<th data-column-id="telefone">Telefone</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $dentistas->result() as $dentista ) :
				echo '<tr>';
				echo '<td></td>';
				echo '<td>' . $dentista->idDentistas . '</td>';
				echo '<td>' . $dentista->nome . '</td>';
				echo '<td>' . $dentista->telefoneCelular . '</td>';
				echo '</tr>';
			endforeach;
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
    grid.find(".command-edit").on("click", function(e)
    {
    	window.location.replace("edit/" + $(this).data("row-id"));
    }).end().find(".command-delete").on("click", function(e)
    {
    	window.location.replace("remove/" + $(this).data("row-id"));
    });
});
});
</script>