<?php 

	class MConvenio extends CI_Model{

		function listConvenios(){
			return $this->db->get('convenios');
		}

	}

/* End of file perfil.php */
/* Location: ./system/application/models/perfil.php */