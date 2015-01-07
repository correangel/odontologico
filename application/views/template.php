<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title><?php echo $title;?></title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css" type="text/css" media="screen" charset="utf-8" />
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" /> -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.bootgrid.min.css" type="text/css" media="screen" charset="utf-8" />	
		
		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-1.11.1.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.maskedinput.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.bootgrid.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>

	</head>
	
	<body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!--<div class="navbar-inner">-->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">ODONTO</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li <?php if($this->uri->segment(1) == 'odontologico' && $this->uri->segment(2) == 'index'){ echo 'class="active"'; } else { echo ''; } ?> ><?php echo anchor('odontologico/index', 'Inicial'); ?></li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'usuario'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuários <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('usuario/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('usuario/add', 'Cadastrar Usuário'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('usuario/listing_inativos', 'Ativar Usuário'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'paciente'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pacientes <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('paciente/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('paciente/add', 'Cadastrar Paciente'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'convenio'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Convênios <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="inactive"><?php echo anchor('convenio/listing', 'Listagem'); ?></li>
                                    <li class="inactive"><?php echo anchor('convenio/add', 'Cadastrar Convênio'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'dentista'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dentistas <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="inactive"><?php echo anchor('dentista/listing', 'Listagem'); ?></li>
                                    <li class="inactive"><?php echo anchor('dentista/add', 'Cadastrar Dentista'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'agenda'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agenda <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="inactive"><?php echo anchor('agenda/listing', 'Agenda'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'financeiro'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Financeiro <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="inactive"><?php echo anchor('financeiro/listing', 'Entradas'); ?></li>
                                    <li class="inactive"><?php echo anchor('financeiro/add', 'Saídas'); ?></li>
                                    <li class="inactive"><?php echo anchor('financeiro/listing_itens', 'Orçamentos'); ?></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        	<li class="dropdown">
                        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('login'); ?> <span class="caret"></span></a>
                        		<ul class="dropdown-menu" role="menu">
                            		<li><?php echo anchor('odontologico/sair', '<span class="glyphicon glyphicon-log-out"></span> Sair'); ?></li>
                            	</ul>
                            </li>
							<li class="inactive">
                            	<p class="navbar-text">MVPDEV Sistemas</p>
                            </li>
                        </ul>
                    </div><!-- .navbar-collapse -->
                <!--</div>-->
            </div><!-- .container -->
        </nav>

        <div class="container">
            <?php $this->load->view($include);?>
        </div>
		
	</body>
</html>