<div class="page-header">
	<h2><?php echo $headline; ?></h2>
</div>
<br>
<div class="table-responsive">
	<table id="tabela"
		class="table table-condensed table-hover table-striped">
		<thead>
			<tr>
				<th data-column-id="commands" data-formatter="commands"	data-sortable="false">Opções</th>
				<th data-column-id="id" data-type="numeric">ID</th>
				<th data-column-id="nome" data-order="asc">Nome</th>
				<th data-column-id="sexo">Sexo</th>
				<th data-column-id="nome-convenio">Convênio</th>
				<th data-column-id="codigo-convenio">Número</th>
				<th data-column-id="telefone1">Telefone</th>
				<th data-column-id="email">Email</th>
				<th data-column-id="data-nascimento">Data de Nascimento</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $pacientes->result() as $paciente ) :
				echo '<tr>';
				echo '<td></td>';
				echo '<td>' . $paciente->idPacientes . '</td>';
				echo '<td>' . $paciente->nome . '</td>';
				echo '<td>' . $paciente->sexo . '</td>';
				echo '<td>' . $paciente->nomeConvenio . '</td>';
				echo '<td>' . $paciente->codigoAssociado . '</td>';
				echo '<td>' . $paciente->telefone . '</td>';
				echo '<td>' . $paciente->email . '</td>';
				echo '<td>' . $paciente->dtNascimento . '</td>';
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
    	window.location.replace("delete/" + $(this).data("row-id"));
    });
});
});
</script>