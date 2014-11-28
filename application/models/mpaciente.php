<?php

	class MPaciente extends CI_Model{
		
		function addPaciente($data){
			$this->db->insert('pacientes', $data);
			return $this->db->insert_id();
		}
		
		function listPacientes(){
			return $this->db->get('pacientes');
		}
		
		function getPaciente($id){
			return $this->db->get_where('pacientes', array('idPacientes'=> $id));
		}
		
		function updatePaciente($id, $data){
			$this->db->where('idPacientes', $id);
			$this->db->update('pacientes', $data);
		}
		
		function deletePaciente($id){
			$this->db->where('idPacientes', $id);
			$this->db->delete('pacientes');
		}
		
	}

	/* End of file mpaciente.php */
	/* Location: ./system/application/models/mpaciente.php */