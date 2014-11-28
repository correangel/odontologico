<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title><?php echo $title;?></title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
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
                            <li class="dropdown <?php if($this->uri->segment(1) == 'produto'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produtos <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('produto/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('produto/add', 'Cadastrar Produto'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('apresentacao/add', 'Cadastrar Apresentação'); ?></li>
                                    <li><?php echo anchor('categoria/add', 'Cadastrar Categoria'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'fornecedor'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fornecedores <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('fornecedor/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('fornecedor/add', 'Cadastrar Fornecedor'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('fornecedor/listing_inativos', 'Ativar Fornecedor'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'notafiscal'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nota Fiscal <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('notafiscal/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('notafiscal/add', 'Cadastrar Nota Fiscal'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'pedido'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pedido <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('pedido/listing', 'Listagem de Pedidos'); ?></li>
                                    <li><?php echo anchor('pedido/add', 'Cadastrar Pedido'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('itempedido/listing_itens', 'Listagem de Itens'); ?></li>
                                </ul>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'estoque' && $this->uri->segment(2) == 'listing'){ echo 'class="active"'; } else { echo ''; } ?> ><?php echo anchor('estoque/listing', 'Estoque'); ?></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        	<li class="dropdown">
                        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('login'); ?> <span class="caret"></span></a>
                        		<ul class="dropdown-menu" role="menu">
                            		<li><?php echo anchor('odontologico/sair', 'Sair'); ?></li>
                            	</ul>
                            </li>
                        </ul>
                    </div><!-- .navbar-collapse -->
                <!--</div>-->
            </div><!-- .container -->
        </nav>

        <div class="container">
            <?php $this->load->view($include);?>
        </div>
        
        <footer class="footer">
            <div class="container">
                <p class="text-muted">MVPDEV Sistemas Digitais - mvpdev@gmail.com</p>
            </div>
        </footer>
		
	</body>
</html>