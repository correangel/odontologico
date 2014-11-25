<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odontologico extends CI_Controller {

	public function Odontologico() 
	{
		parent::__construct();
		$this->check_isvalidated();
	}
	
	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	
	public function sair(){
        $this->session->sess_destroy();
        redirect('login');
    }

	public function index()
	{
        $data['title'] = "Página Inicial - Odontológico";
        $data['headline'] = "Odontológico";
        $data['include'] = "odontologico_index";
	    $this->load->view('template', $data);
	}
	
}

/* End of file estoque.php */
/* Location: ./application/controllers/estoque.php */