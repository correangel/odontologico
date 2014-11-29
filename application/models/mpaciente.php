<?php

	class MPaciente extends CI_Model{
		
		function addPaciente($data){
			$pacientes = array(
				'nome' => $data['nome'],
				'dtNascimento' => $data['dtNascimento'], 
				'sexo' => $data['sexo'], 
				'email' => $data['email']
			);			
			$this->db->insert('pacientes', $pacientes);
			$id = $this->db->insert_id();
			
			$telefones = array(
				array(
					'Pacientes_idPacientes' => $id,
					'telefone' => $data['tel1'], 
					'tipo' => $data['tipoTel1']
				), 
				array(
					'Pacientes_idPacientes' => $id,
					'telefone' => $data['tel2'],
					'tipo' => $data['tipoTel2']
				),
				array(
					'Pacientes_idPacientes' => $id,
					'telefone' => $data['tel3'],
					'tipo' => $data['tipoTel3']
				)
			);
			$this->db->insert_batch('telefones', $telefones);
			
			$endereco = array(
				'Pacientes_idPacientes' => $id,
				'logradouro' => $data['rua'], 
				'numero' => $data['numero'], 
				'complemento' => $data['complemento'], 
				'bairro' => $data['bairro'], 
				'cidade' => $data['cidade'], 
				'uf' => $data['uf'], 
				'cep' => $data['cep']
			);
			$this->db->insert('enderecos', $endereco);
			
			$convenio = array(
				'Convenios_idConvenios' => $data['convenio'], 
				'Pacientes_idPacientes' => $id, 
				'codigoAssociado' => $data['codigoAssociado'], 
				'ativo' => 'S'
			);
			$this->db->insert('convenios', $convenio);
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