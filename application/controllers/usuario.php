<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Usuario extends CI_Controller {
	public function Usuario() {
		parent::__construct ();
		$this->check_isvalidated ();
	}
	private function check_isvalidated() {
		if (! $this->session->userdata ( 'validated' )) {
			redirect ( 'login' );
		}
	}
	function add() {
		$data ['title'] = "Cadastro de Usuário - Odontológico";
		$data ['headline'] = "Cadastro de Usuários";
		$data ['include'] = "usuario/usuario_add";
		$this->load->model ( 'MUsuario', '', TRUE );
		$data ['usuarios'] = $this->MUsuario->listUsuario ();
		$this->load->model ( 'MPerfil', '', TRUE );
		$data ['perfis'] = $this->MPerfil->listPerfil ();
		$this->load->view ( 'template', $data );
	} 
	function create() {
		$this->load->model ( 'MUsuario', '', TRUE );
		$this->MUsuario->addUsuario ( $_POST );
		redirect ( 'usuario/listing', 'refresh' );
	}
	function edit() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MUsuario', '', TRUE );
		$data ['usuario'] = $this->MUsuario->getUsuario ( $id )->result ();
		$data ['title'] = "Modificar Usuários - Odontológico";
		$data ['headline'] = "Edição de Usuários";
		$data ['include'] = "usuario/usuario_edit";
		$this->load->model ( 'MPerfil', '', TRUE );
		$data ['perfis'] = $this->MPerfil->listPerfil ();
		$this->load->view ( 'template', $data );
	}
	function update() {
		$this->load->model ( 'MUsuario', '', TRUE );
		$this->MUsuario->updateUsuario ( $_POST ['id_usuario'], $_POST );
		redirect ( 'usuario/listing', 'refresh' );
	}
	function delete() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MUsuario', '', TRUE );
		$this->MUsuario->deleteUsuario ( $id );
		redirect ( 'usuario/listing', 'refresh' );
	}
	function inativa() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MUsuario', '', TRUE );
		$this->MUsuario->inativarUsuario ( $id );
		redirect ( 'usuario/listing', 'refresh' );
	}
	function ativa() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MUsuario', '', TRUE );
		$this->MUsuario->ativarUsuario ( $id );
		redirect ( 'usuario/listing_inativos', 'refresh' );
	}
	function listing() {
		$this->load->model ( 'MUsuario', '', TRUE );
		$data ['usuarios'] = $this->MUsuario->listUsuario ();
		$data ['title'] = "Listagem de Usuários - Odontológico";
		$data ['headline'] = "Listagem de Usuários";
		$data ['include'] = 'usuario/usuario_listing';
		$this->load->view ( 'template', $data );
	}
	function listing_inativos() {
		$this->load->model ( 'MUsuario', '', TRUE );
		$data ['usuarios'] = $this->MUsuario->listUsuarioInativo ();
		$data ['title'] = "Listagem de Usuários - Odontológico";
		$data ['headline'] = "Listagem de Usuários";
		$data ['include'] = 'usuario/usuario_listing_ativa';
		$this->load->view ( 'template', $data );
	}
}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */