

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
			    	<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="dtNascimento">Data de Nascimento</label>
			    	<input type="date" id="dtNascimento" name="dtNascimento" class="form-control" required>
				</div>
				
				<div class="form-group radio col-xs-4 btn-group"  data-toggle="buttons">
					
					<label class="btn btn-default">
						<input type="radio" name="sexo" id="sexo1" value="M">
						Masculino
					</label>

					<label class="btn btn-default">
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
								echo ('<option value="'.$convenio->idConvenios.'">'.$convenio->nome.'</option>');
							endforeach;
						?>
				    </select>
				</div>	
			
				<div class="form-group  col-xs-4">
					<label for="codigoAssociado">Número Associado</label>
			    	<input type="text" id="codigoAssociado" name="codigoAssociado" class="form-control">
				</div>
				
				<div class="form-group  col-xs-4">
					<label for="email">Email</label>
			    	<input type="email" id="email" name="email" class="form-control" placeholder="exemplo@gmail.com">
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="form-group col-xs-2">
					<label for="tel1">Telefone 1</label>
			    	<input type="tel" id="tel1" name="tel1" class="form-control telefone" placeholder="Telefone" pattern='[\(]\d{2}[\)]\d{4}[\-]\d{4}'>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel1">Tipo</label>
				    <select name="tipoTel1" class="form-control">
				    	<option>Celular</option>
					    <option>Residencial</option>
					    <option>Comercial</option>
				    </select>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tel2">Telefone 2</label>
			    	<input type="tel" id="tel2" name="tel2" class="form-control telefone" placeholder="Telefone">
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel2">Tipo</label>
				    <select name="tipoTel2" class="form-control">
				    	<option>Celular</option>
					    <option>Residencial</option>
					    <option>Comercial</option>
				    </select>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tel3">Telefone 3</label>
			    	<input type="tel" id="tel3" name="tel3" class="form-control telefone" placeholder="Telefone">
				</div>
				
				<div class="form-group col-xs-2">
					<label for="tipoTel3">Tipo</label>
				    <select name="tipoTel3" class="form-control">
				    	<option>Celular</option>
					    <option>Residencial</option>
					    <option>Comercial</option>
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
			    	<input type="text" id="cep" name="cep" class="form-control cep" placeholder="Cep">
				</div>
			
				<div class="form-group col-xs-4">
					<label for="rua">Rua</label>
			    	<input type="text" id="rua" name="logradouro" class="form-control" placeholder="Rua" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="numero">Número</label>
			    	<input type="text" id="numero" name="numero" class="form-control" placeholder="Número" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="complemento">Complemento</label>
			    	<input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="form-group col-xs-4">
					<label for="bairro">Bairro</label>
			    	<input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
				</div>
			
				<div class="form-group col-xs-4">
					<label for="cidade">Cidade</label>
			    	<input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
				</div>
				
				<div class="form-group col-xs-2">
					<label for="uf">Estado</label>
			    	<!-- <input type="text" id="uf" name="uf" class="form-control" placeholder="Estado"> -->
			    	<select name="uf" class="uf form-control" id="uf">
					    <option value="AC">AC</option>
					    <option value="AL">AL</option>
					    <option value="AM">AM</option>
					    <option value="AP">AP</option>
					    <option value="BA">BA</option>
					    <option value="CE">CE</option>
					    <option value="DF">DF</option>
					    <option value="ES">ES</option>
					    <option value="GO">GO</option>
					    <option value="MA">MA</option>
					    <option value="MG">MG</option>
					    <option value="MS">MS</option>
					    <option value="MT">MT</option>
					    <option value="PA">PA</option>
					    <option value="PB">PB</option>
					    <option value="PE">PE</option>
					    <option value="PI">PI</option>
					    <option value="PR">PR</option>
					    <option value="RJ">RJ</option>
					    <option value="RN">RN</option>
					    <option value="RO">RO</option>
					    <option value="RR">RR</option>
					    <option value="RS">RS</option>
					    <option value="SC">SC</option>
					    <option value="SE">SE</option>
					    <option value="SP">SP</option>
					    <option value="TO">TO</option>
					</select>
				</div>
				
			</div>
		
		</div><!-- /.panel-body -->
	</div><!-- /.panel -->

	<button type="submit" class="btn btn-primary">Cadastrar</button>
	
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