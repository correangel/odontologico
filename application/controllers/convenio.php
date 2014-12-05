<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Convenio extends CI_Controller {

	public function Convenio() {
		parent::__construct();
		$this->check_isvalidated();
	}
	
	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('login');
		}
	}
	

	function add(){
		$data['title'] = "Cadastro de Convênio - Odontológico";
		$data['headline'] = "Cadastro de Convênios";
		$data['include'] = "convenio/convenio_add";
		$this->load->view('template', $data);
	}
	
	function create(){
		$this->load->model('MConvenio','',TRUE);
		$this->MConvenio->addConvenio($_POST);
		redirect('convenio/listing', 'refresh');
	}
	
	function edit(){
		$id = $this->uri->segment(3);
		$this->load->model('MConvenio', '', TRUE);
		$data['convenio'] = $this->MConvenio->getConvenio($id)->result();
		$data['title'] = "Modificar Convênio - Odontológico";
		$data['headline'] = "Edição de Convênios";
		$data['include'] = "convenio/convenio_edit";
		$this->load->view('template', $data);
	}
	
	function update(){
		$this->load->model('MConvenio','',TRUE);
		$this->MConvenio->updateConvenio($_POST['idConvenios'], $_POST);
		redirect('convenio/listing', 'refresh');
	}
	
	function delete(){
		$id = $this->uri->segment(3);
		$this->load->model('MConvenio','',TRUE);
		$this->MConvenio->deleteConvenio($id);
		redirect('convenio/listing', 'refresh');
	}
	
	function inativa(){
		$id = $this->uri->segment(3);
		$this->load->model('MConvenio','',TRUE);
		$this->MConvenio->inativarConvenio($id);
		redirect('convenio/listing', 'refresh');
	}
	
	function listing(){
		$this->load->model('MConvenio','',TRUE);
		$data['convenios'] = $this->MConvenio->listConvenios();
		$data['title'] = "Listagem de Convênios - Odontológico";
		$data['headline'] = "Listagem de Convênios";
		$data['include'] = 'convenio/convenio_listing';
		$this->load->view('template', $data);
	}

}
	
/* End of file convenio.php */
/* Location: ./application/controllers/convenio.php */