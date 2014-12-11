<?php
class MOdontograma extends CI_Model {
	function addOdontograma($data) {
		$this->db->insert ( 'odontogramas', $data );
	}
	function listOdontogramas($id) {
		$this->db->join ( 'pacientes', 'pacientes.idPacientes = odontogramas.Pacientes_idPacientes' );
		$this->db->order_by ( 'dataOdontograma', 'asc' );
		return $this->db->get ( 'odontogramas' );
	}
	function updateOdontograma($id, $data) {
		$this->db->where ( 'idOdontograma', $id );
		$this->db->update ( 'odontogramas', $data );
	}
	function deleteOdontograma($id) {
		$this->db->where ( 'idOdontograma', $id );
		$this->db->delete ( 'odontogramas' );
	}
	function getOdontograma($id) {
		return $this->db->get_where ( 'odontogramas', array (
				'idOdontogramas' => $id 
		) );
	}
	function countOdontogramas($id) {
		$this->db->where ( 'Pacientes_idPacientes', $id );
		return $this->db->count_all_results ( 'odontogramas' );
	}
}

/* End of file musuario.php */
/* Location: ./system/application/models/musuario.php */