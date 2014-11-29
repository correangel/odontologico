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
				'logradouro' => $data['logradouro'], 
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
			$this->db->insert('convenios_pacientes', $convenio);
		}
		
		function listPacientes(){
			$this->db->join('convenios_pacientes', 'convenios_pacientes.Pacientes_idPacientes = pacientes.idPacientes');
			$this->db->join('convenios', 'convenios.idConvenios = convenios_pacientes.Convenios_idConvenios');
			return $this->db->get('pacientes');
		}
		
		function getPaciente($id){
			$this->db->join('convenios_pacientes', 'convenios_pacientes.Pacientes_idPacientes = pacientes.idPacientes');
			//$this->db->join('convenios', 'convenios_pacientes.Convenios_idConvenios = convenios.idConvenios');
			$this->db->join('enderecos', 'enderecos.Pacientes_idPacientes = pacientes.idPacientes');
			//$this->db->join('telefones', 'telefones.Pacientes_idPacientes = pacientes.idPacientes');
			return $this->db->get_where('pacientes', array('idPacientes'=> $id));
		}
		
		function getTelefones($id){
			return $this->db->get_where('telefones', array('Pacientes_idPacientes' => $id));
		}
		
		function updatePaciente($id, $data){
			
			$pacientes = array(
					'nome' => $data['nome'],
					'dtNascimento' => $data['dtNascimento'],
					'sexo' => $data['sexo'],
					'email' => $data['email']
			);
			$this->db->where('idPacientes', $id);
			$this->db->update('pacientes', $pacientes);
				
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
			//$this->db->where('Pacientes_idPacientes', $id);
			$this->db->update_batch('telefones', $telefones, $id);
				
			$endereco = array(
					'Pacientes_idPacientes' => $id,
					'logradouro' => $data['logradouro'],
					'numero' => $data['numero'],
					'complemento' => $data['complemento'],
					'bairro' => $data['bairro'],
					'cidade' => $data['cidade'],
					'uf' => $data['uf'],
					'cep' => $data['cep']
			);
			$this->db->where('Pacientes_idPacientes', $id);
			$this->db->update('enderecos', $endereco);
				
			$convenio = array(
					'codigoAssociado' => $data['codigoAssociado'],
					'ativo' => 'S'
			);
			$this->db->where('Convenios_idConvenios', $data['convenio']);
			$this->db->where('Pacientes_idPacientes', $id);
			$this->db->update('convenios_pacientes', $convenio);
		}
		
		function deletePaciente($id){
			$this->db->where('idPacientes', $id);
			$this->db->delete('pacientes');
		}
		
	}

	/* End of file mpaciente.php */
	/* Location: ./system/application/models/mpaciente.php */