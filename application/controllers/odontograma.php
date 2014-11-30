<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odontograma extends CI_Controller {

	public function Odontograma() {
		parent::__construct();
		$this->check_isvalidated();
	}
	
	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	
	function add()
    {
        $data['title'] = "Cadastro de Odontograma - Odontológico";
        $data['headline'] = "Cadastro de Odontograma";
        $data['include'] = "odontograma/odontograma_add";
		$this->load->view('template', $data);
    }
	
	function create()
    {
        $this->load->model('MOdontograma','',TRUE);
        $this->MOdontograma->addOdontograma($_POST);
        redirect('odontograma/listing', 'refresh');
    }
	
	function edit()
	{
		$id = $this->uri->segment(3);
		$this->load->model('MOdontograma', '', TRUE);
		$data['usuario'] = $this->MOdontograma->getOdontograma($id)->result();
		$data['title'] = "Modificar Odontograma - Odontológico";
		$data['headline'] = "Edição de Odontogramas";
		$data['include'] = "odontograma/odontograma_edit";
		$this->load->view('template', $data);
	}
	
	function update()
	{
		$this->load->model('MOdontograma','',TRUE);
		$this->MOdontograma->updateOdontograma($_POST['idOdontogramas'], $_POST);
		redirect('odontograma/listing', 'refresh');
	}
	
	function delete()
	{
		$id = $this->uri->segment(3);
		$this->load->model('MOdontograma','',TRUE);
		$this->MOdontograma->deleteOdontograma($id);
		redirect('odontograma/listing', 'refresh');
	}
	
	function listing()
	{
		$id = $this->uri->segment(3);
		$this->load->model('MOdontograma','',TRUE);
		$numeroOdontogramas = $this->MOdontograma->countOdontogramas($id);
		if($numeroOdontogramas > 0 ){
			$data['odontogramas'] = $this->MOdontograma->listOdontogramas($id)->result();
			$data['title'] = "Listagem de Odontogramas - Odontológico";
			$data['headline'] = "Listagem de Odontogramas";
			$data['include'] = 'odontograma/odontograma_listing';
			$this->load->view('template', $data);
		} else {
			redirect('odontograma/add', 'refresh');
		}
	}

}

/* End of file odontograma.php */
/* Location: ./application/controllers/odontograma.php */