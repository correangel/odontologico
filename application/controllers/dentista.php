<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Dentista extends CI_Controller {
	public function Dentista() {
		parent::__construct ();
		$this->check_isvalidated ();
	}
	private function check_isvalidated() {
		if (! $this->session->userdata ( 'validated' )) {
			redirect ( 'login' );
		}
	}
	function add() {
		$data ['title'] = "Cadastro de Dentista - Odontológico";
		$data ['headline'] = "Cadastro de Dentistas";
		$data ['include'] = "dentista/dentista_add";
		$this->load->view ( 'template', $data );
	}
	function create() {
		$this->load->model ( 'MDentista', '', TRUE );
		$this->MDentista->addDentista ( $_POST );
		redirect ( 'dentista/listing', 'refresh' );
	}
	function edit() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MDentista', '', TRUE );
		$data ['dentista'] = $this->MDentista->getDentista ( $id )->result ();
		$data ['title'] = "Modificar Dentista - Odontológico";
		$data ['headline'] = "Edição de Dentistas";
		$data ['include'] = "dentista/dentista_edit";
		$this->load->view ( 'template', $data );
	}
	function update() {
		$this->load->model ( 'MDentista', '', TRUE );
		$this->MDentista->updateDentista ( $_POST ['idDentistas'], $_POST );
		redirect ( 'dentista/listing', 'refresh' );
	}
	function delete() {
		$id = $this->uri->segment ( 3 );
		$this->load->model ( 'MDentista', '', TRUE );
		$this->MDentista->deleteDentista ( $id );
		redirect ( 'dentista/listing', 'refresh' );
	}
	function listing() {
		$this->load->model ( 'MDentista', '', TRUE );
		$data ['dentistas'] = $this->MDentista->listDentistas ();
		$data ['title'] = "Listagem de Dentistas - Odontológico";
		$data ['headline'] = "Listagem de Dentistas";
		$data ['include'] = 'dentista/dentista_listing';
		$this->load->view ( 'template', $data );
	}
}
	
/* End of file dentista.php */
/* Location: ./application/controllers/dentista.php */