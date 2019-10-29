<?php
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class model_pertama extends CI_model{
	public function getdata(){
		return $this->db->get('datashop')->result();
		}
	}