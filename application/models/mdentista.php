<?php
class MDentista extends CI_Model {
	function addDentista($data) {
		$this->db->insert ( 'dentistas', $data );
	}
	function listDentistas() {
		return $this->db->get ( 'dentistas' );
	}
	function getDentista($id) {
		return $this->db->get_where ( 'dentistas', array (
				'idDentistas' => $id 
		) );
	}
	function updateDentista($id, $data) {
		$this->db->where ( 'idDentistas', $id );
		$this->db->update ( 'dentistas', $data );
	}
	function deleteDentista($id) {
		$data = array (
				'idDentistas' => $id 
		);
		$this->db->delete ( 'dentistas', $data );
	}
}

/* End of file mdentista.php */
/* Location: ./system/application/models/mdentista.php */