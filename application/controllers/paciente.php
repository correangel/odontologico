<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Paciente extends CI_Controller{
		
		public function Paciente() {
			parent::__construct();
			$this->check_isvalidated();
		}
		
		private function check_isvalidated(){
			if(! $this->session->userdata('validated')){
				redirect('login');
			}
		}
		
		function add(){
			$data['title'] = "Cadastro de Paciente - Odontológico";
			$data['headline'] = "Cadastro de Pacientes";
			$data['include'] = "paciente/paciente_add";
			$this->load->model('MPaciente', '', TRUE);
			$data['pacientes'] = $this->MPaciente->listPacientes();
			$this->load->view('template', $data);
		}
		
		function create(){
			$this->load->model('MPaciente','',TRUE);
			$id = $this->MPaciente->addPaciente($_POST);
			redirect('paciente/listing', 'refresh');
		}
		
		function edit(){
			$id = $this->uri->segment(3);
			$this->load->model('MPaciente', '', TRUE);
			$data['paciente'] = $this->MPaciente->getPaciente($id)->result();
			$data['title'] = "Modificar Pacientes - Odontológico";
			$data['headline'] = "Edição de Pacientes";
			$data['include'] = "paciente/paciente_edit";
			$this->load->view('template', $data);
		}
		
		function update(){
			$this->load->model('MPaciente','',TRUE);
			$this->MPaciente->updatePaciente($_POST['idPacientes'], $_POST);
			redirect('paciente/listing', 'refresh');
		}
		
		function delete(){
			$id = $this->uri->segment(3);
			$this->load->model('MPaciente','',TRUE);
			$this->MPaciente->deletePaciente($id);
			redirect('paciente/listing', 'refresh');
		}
		
		function listing(){
			$this->load->model('MPaciente','',TRUE);
			$data['pacientes'] = $this->MPaciente->listPacientes();
			$data['title'] = "Listagem de Pacientes - Odontológico";
			$data['headline'] = "Listagem de Pacientes";
			$data['include'] = 'paciente/paciente_listing';
			$this->load->view('template', $data);
		}
		
	}