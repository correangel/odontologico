<form role="form" action="<?php echo base_url('index.php/paciente/create'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">Dados Básicos</h3>
		</div>
		<div class="panel-body">

			<div class="row">
			
				<div class="form-group col-xs-6">
					<label for="nome">Nome</label>
			    	<input type="text" value="<?php echo $paciente[0]->nome; ?>" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="dtNascimento">Data de Nascimento</label>
			    	<input type="date" value="<?php echo $paciente[0]->dtNascimento; ?>" id="dtNascimento" name="dtNascimento" class="form-control" required>
				</div>
				
				<div class="form-group radio col-xs-4 btn-group"  data-toggle="buttons">
					
					<label class="btn btn-default <?php if($paciente[0]->sexo == 'M'){ echo 'active'; } else { echo ''; }  ?>">
						<input type="radio" name="sexo" id="sexo1" value="M">
						Masculino
					</label>

					<label class="btn btn-default <?php if($paciente[0]->sexo == 'F'){ echo 'active'; } else { echo ''; }  ?>">
						<input type="radio" name="sexo" id="sexo2" value="F">
						Feminino
					</label>
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="form-group col-xs-4">
					<label for="convenio">Convênio</label>
				    <select name="convenio" class="form-control" required>
				    	<option></option>
				    	<?php 
						    foreach($convenios->result() as $convenio):
								echo ('<option value="'.$convenio->idConvenios.'"'); 
						    	if($convenio->idConvenios == $paciente[0]->Convenios_idConvenios)
						    		echo('selected="selected"');
						    	echo('>'.$convenio->nomeConvenio.'</option>');
							endforeach;
						?>
				    </select>
				</div>	
			
				<div class="form-group  col-xs-4">
					<label for="codigoAssociado">Número Associado</label>
			    	<input type="text" value="<?php echo $paciente[0]->codigoAssociado; ?>" id="codigoAssociado" name="codigoAssociado" class="form-control">
				</div>
				
				<div class="form-group  col-xs-4">
					<label for="email">Email</label>
			    	<input type="email" value="<?php echo $paciente[0]->email; ?>" id="email" name="email" class="form-control" placeholder="exemplo@gmail.com">
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="form-group col-xs-2">
					<label for="tel1">Telefone 1</label>
			    	<input type="tel" value="<?php echo $telefone[0]->telefone; ?>" id="tel1" name="tel1" class="form-control telefone" placeholder="Telefone">
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel1">Tipo</label>
				    <select name="tipoTel1" class="form-control">
				    	<option value="Celular" <?php if($telefone[0]->tipo == 'Celular'){echo 'selected="selected"';}else{echo '';} ?>>Celular</option>
					    <option value="Residencial" <?php if($telefone[0]->tipo == 'Residencial'){echo 'selected="selected"';}else{echo '';} ?>>Residencial</option>
					    <option value="Comercial" <?php if($telefone[0]->tipo == 'Comercial'){echo 'selected="selected"';}else{echo '';} ?>>Comercial</option>
				    </select>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tel2">Telefone 2</label>
			    	<input type="tel" value="<?php echo $telefone[1]->telefone; ?>" id="tel2" name="tel2" class="form-control telefone" placeholder="Telefone">
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel2">Tipo</label>
				    <select name="tipoTel2" class="form-control">
				    	<option value="Celular" <?php if($telefone[1]->tipo == 'Celular'){echo 'selected=selected';}else{echo '';} ?>>Celular</option>
					    <option value="Residencial" <?php if($telefone[1]->tipo == 'Residencial'){echo 'selected=selected';}else{echo '';} ?>>Residencial</option>
					    <option value="Comercial" <?php if($telefone[1]->tipo == 'Comercial'){echo 'selected=selected';}else{echo '';} ?>>Comercial</option>
				    </select>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tel3">Telefone 3</label>
			    	<input type="tel" value="<?php echo $telefone[2]->telefone; ?>" id="tel3" name="tel3" class="form-control telefone" placeholder="Telefone">
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel3">Tipo</label>
				    <select name="tipoTel3" class="form-control">
				    	<option value="Celular" <?php if($telefone[2]->tipo == 'Celular'){echo 'selected=selected';}else{echo '';} ?>>Celular</option>
					    <option value="Residencial" <?php if($telefone[2]->tipo == 'Residencial'){echo 'selected=selected';}else{echo '';} ?>>Residencial</option>
					    <option value="Comercial" <?php if($telefone[2]->tipo == 'Comercial'){echo 'selected=selected';}else{echo '';} ?>>Comercial</option>
				    </select>
				</div>
			
			</div><!-- /.row -->
			
		</div><!-- /.panel-body -->
	</div><!-- /.panel -->
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">Endereço</h3>
		</div>
		<div class="panel-body">
		
			<div class="row">
			
				<div class="form-group col-xs-2">
					<label for="cep">Cep</label>
			    	<input type="text" value="<?php echo $paciente[0]->cep; ?>" id="cep" name="cep" class="form-control cep" placeholder="Cep">
				</div>
			
				<div class="form-group col-xs-4">
					<label for="rua">Rua</label>
			    	<input type="text" value="<?php echo $paciente[0]->logradouro; ?>" id="rua" name="logradouro" class="form-control" placeholder="Rua" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="numero">Número</label>
			    	<input type="text" value="<?php echo $paciente[0]->numero; ?>" id="numero" name="numero" class="form-control" placeholder="Número" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="complemento">Complemento</label>
			    	<input type="text" value="<?php echo $paciente[0]->complemento; ?>" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="form-group col-xs-4">
					<label for="bairro">Bairro</label>
			    	<input type="text" value="<?php echo $paciente[0]->bairro; ?>" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
				</div>
			
				<div class="form-group col-xs-4">
					<label for="cidade">Cidade</label>
			    	<input type="text" value="<?php echo $paciente[0]->cidade; ?>" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="uf">Estado</label>
			    	<!-- <input type="text" id="uf" name="uf" class="form-control" placeholder="Estado"> -->
			    	<select name="uf" class="uf form-control" id="uf">
					    <option value="AC" <?php if($paciente[0]->uf == 'AC'){echo 'selected=selected';}else{echo '';} ?>>AC</option>
						<option value="AL" <?php if($paciente[0]->uf == 'AL'){echo 'selected=selected';}else{echo '';} ?>>AL</option>
						<option value="AM" <?php if($paciente[0]->uf == 'AM'){echo 'selected=selected';}else{echo '';} ?>>AM</option>
						<option value="AP" <?php if($paciente[0]->uf == 'AP'){echo 'selected=selected';}else{echo '';} ?>>AP</option>
						<option value="BA" <?php if($paciente[0]->uf == 'BA'){echo 'selected=selected';}else{echo '';} ?>>BA</option>
						<option value="CE" <?php if($paciente[0]->uf == 'CE'){echo 'selected=selected';}else{echo '';} ?>>CE</option>
						<option value="DF" <?php if($paciente[0]->uf == 'DF'){echo 'selected=selected';}else{echo '';} ?>>DF</option>
						<option value="ES" <?php if($paciente[0]->uf == 'ES'){echo 'selected=selected';}else{echo '';} ?>>ES</option>
						<option value="GO" <?php if($paciente[0]->uf == 'GO'){echo 'selected=selected';}else{echo '';} ?>>GO</option>
						<option value="MA" <?php if($paciente[0]->uf == 'MA'){echo 'selected=selected';}else{echo '';} ?>>MA</option>
						<option value="MG" <?php if($paciente[0]->uf == 'MG'){echo 'selected=selected';}else{echo '';} ?>>MG</option>
						<option value="MS" <?php if($paciente[0]->uf == 'MS'){echo 'selected=selected';}else{echo '';} ?>>MS</option>
						<option value="MT" <?php if($paciente[0]->uf == 'MT'){echo 'selected=selected';}else{echo '';} ?>>MT</option>
						<option value="PA" <?php if($paciente[0]->uf == 'PA'){echo 'selected=selected';}else{echo '';} ?>>PA</option>
						<option value="PB" <?php if($paciente[0]->uf == 'PB'){echo 'selected=selected';}else{echo '';} ?>>PB</option>
						<option value="PE" <?php if($paciente[0]->uf == 'PE'){echo 'selected=selected';}else{echo '';} ?>>PE</option>
						<option value="PI" <?php if($paciente[0]->uf == 'PI'){echo 'selected=selected';}else{echo '';} ?>>PI</option>
						<option value="PR" <?php if($paciente[0]->uf == 'PR'){echo 'selected=selected';}else{echo '';} ?>>PR</option>
						<option value="RJ" <?php if($paciente[0]->uf == 'RJ'){echo 'selected=selected';}else{echo '';} ?>>RJ</option>
						<option value="RN" <?php if($paciente[0]->uf == 'RN'){echo 'selected=selected';}else{echo '';} ?>>RN</option>
						<option value="RO" <?php if($paciente[0]->uf == 'RO'){echo 'selected=selected';}else{echo '';} ?>>RO</option>
						<option value="RR" <?php if($paciente[0]->uf == 'RR'){echo 'selected=selected';}else{echo '';} ?>>RR</option>
						<option value="RS" <?php if($paciente[0]->uf == 'RS'){echo 'selected=selected';}else{echo '';} ?>>RS</option>
						<option value="SC" <?php if($paciente[0]->uf == 'SC'){echo 'selected=selected';}else{echo '';} ?>>SC</option>
						<option value="SE" <?php if($paciente[0]->uf == 'SE'){echo 'selected=selected';}else{echo '';} ?>>SE</option>
						<option value="SP" <?php if($paciente[0]->uf == 'SP'){echo 'selected=selected';}else{echo '';} ?>>SP</option>
						<option value="TO" <?php if($paciente[0]->uf == 'TO'){echo 'selected=selected';}else{echo '';} ?>>TO</option>
					</select>
				</div>
				
			</div>
		
		</div><!-- /.panel-body -->
	</div><!-- /.panel -->

	<button type="submit" class="btn btn-primary">Atualizar</button>
	
	<br><br><br><br><br><br>

</form>

	
	<script type="text/javascript" >
            $(document).ready(function() {
                $("#cep").blur(function() {   
                    var cep = $(this).val();
                    var validacep = /^[0-9]{5}-?[0-9]{3}$/;
                    if(validacep.test(cep)) {
                        $("#rua").val("...")
                        $("#bairro").val("...")
                        $("#cidade").val("...")
                        $("#uf").val("...")
                        $("#ibge").val("...")
                        $.getJSON("http://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
								$("#numero").focus();
                            }
                            else {
                                //alert("CEP não encontrado.");
								$("#modal1").modal();
                            }
                        });
                    } 
                    else {
                        //alert("Formato de CEP inválido.");
						$("#modal2").modal();
                    }
                });
            });
        </script>