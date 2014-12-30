<?php
class MConvenio extends CI_Model {
	function addConvenio($data) {
		$this->db->insert ( 'convenios', $data );
	}
	function listConvenios() {
		return $this->db->get_where ( 'convenios', array (
				'ativo_convenio' => 'S' 
		) );
	}
	function getConvenio($id) {
		return $this->db->get_where ( 'convenios', array (
				'idConvenios' => $id 
		) );
	}
	function updateConvenio($id, $data) {
		$this->db->where ( 'idConvenios', $id );
		$this->db->update ( 'convenios', $data );
	}
	function inativarConvenio($id) {
		$data = array (
				'ativo_convenio' => 'N' 
		);
		$this->db->where ( 'idConvenios', $id );
		$this->db->update ( 'convenios', $data );
	}
}

/* End of file perfil.php */
/* Location: ./system/application/models/perfil.php */