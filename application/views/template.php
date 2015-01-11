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
        <nav class="navbar navbar-default" role="navigation">
            <!--<div class="navbar-inner">-->
                <div class="container-fluid">
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
                            <li <?php if($this->uri->segment(1) == 'odontologico' && $this->uri->segment(2) == 'index'){ echo 'class="active"'; } else { echo ''; } ?> >
                            	<?php echo anchor('odontologico/index', 'Inicial'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'usuario'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('usuario/listing', 'Usuários'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'paciente'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('paciente/listing', 'Pacientes'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'convenio'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('convenio/listing', 'Convênios'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'dentista'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('dentista/listing', 'Dentistas'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'agenda'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('agenda/listing', 'Agenda'); ?>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'financeiro'){ echo 'class="active"'; } else { echo ''; } ?> >
                                <?php echo anchor('financeiro/listing', 'Financeiro'); ?>
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

        <div class="container-fluid">
            <?php $this->load->view($include);?>
        </div>
		
	</body>
</html>