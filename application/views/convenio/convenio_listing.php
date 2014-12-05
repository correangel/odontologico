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
				<th data-column-id="nome" data-order="asc">Convênio</th>
				<th data-column-id="telefone">Telefone</th>
				<th data-column-id="contato">Contato</th>
				<th data-column-id="diaPagamento">Dia de pagamento</th>
				<th data-column-id="desconto">Desconto</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $convenios->result() as $convenio ) :
				echo '<tr>';
				echo '<td></td>';
				echo '<td>' . $convenio->idConvenios . '</td>';
				echo '<td>' . $convenio->nomeConvenio . '</td>';
				echo '<td>' . $convenio->telefone . '</td>';
				echo '<td>' . $convenio->contato . '</td>';
				echo '<td>' . $convenio->diaPagamento . '</td>';
				echo '<td>' . $convenio->desconto . '</td>';
				echo '</tr>';
			endforeach;
			?>
	  </tbody>
	</table>
</div>

<br>
<br>
<br>

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
    	window.location.replace("inativa/" + $(this).data("row-id"));
    });
});
});
</script>