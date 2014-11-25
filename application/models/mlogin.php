<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model{
    
    function validate(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->db->where('login', $username);
        $this->db->where('senha', $password);
		
		$this->db->join('perfil', 'perfil.id_perfil = usuario.perfil');
        
		$query = $this->db->get('usuario');
        if($query->num_rows == 1){
            $row = $query->row();
            $data = array(
                    'userid' => $row->id_usuario,
                    'login' => $row->login,
                    'perfil' => $row->nome_perfil,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}

/* End of file login.php */
/* Location: ./application/models/login.php */