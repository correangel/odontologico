<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title><?php echo $title;?></title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.8.10.custom.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/TableTools.css" type="text/css" media="screen" charset="utf-8" />

		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-1.9.1.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-ui-1.10.1.custom.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.maskedinput.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/TableTools.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

	</head>
	
	<body>
        <div class="navbar navbar-fixed-top" role="navigation">
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
                            <li class="divider-vertical"></li>
                            <li <?php if($this->uri->segment(1) == 'odontologico' && $this->uri->segment(2) == 'index'){ echo 'class="active"'; } else { echo ''; } ?> ><?php echo anchor('odontologico/index', 'Inicial'); ?></li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'usuario'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuários <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('usuario/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('usuario/add', 'Cadastrar Usuário'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('usuario/listing_inativos', 'Ativar Usuário'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'produto'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produtos <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('produto/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('produto/add', 'Cadastrar Produto'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('apresentacao/add', 'Cadastrar Apresentação'); ?></li>
                                    <li><?php echo anchor('categoria/add', 'Cadastrar Categoria'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'fornecedor'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fornecedores <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('fornecedor/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('fornecedor/add', 'Cadastrar Fornecedor'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('fornecedor/listing_inativos', 'Ativar Fornecedor'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'notafiscal'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nota Fiscal <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('notafiscal/listing', 'Listagem'); ?></li>
                                    <li><?php echo anchor('notafiscal/add', 'Cadastrar Nota Fiscal'); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php if($this->uri->segment(1) == 'pedido'){ echo 'active'; } else { echo ''; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pedido <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('pedido/listing', 'Listagem de Pedidos'); ?></li>
                                    <li><?php echo anchor('pedido/add', 'Cadastrar Pedido'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor('itempedido/listing_itens', 'Listagem de Itens'); ?></li>
                                </ul>
                            </li>
                            <li <?php if($this->uri->segment(1) == 'estoque' && $this->uri->segment(2) == 'listing'){ echo 'class="active"'; } else { echo ''; } ?> ><?php echo anchor('estoque/listing', 'Estoque'); ?></li>
                            <li><?php echo anchor('estoque/sair', 'Sair'); ?></li>
                        </ul>
                    </div>
                <!--</div>-->
            </div>
        </div>

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