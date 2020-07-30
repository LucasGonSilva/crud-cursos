<?php

class ArquivosModel extends CI_Model {

    public function inserir($dados) {
        $this->load->database();
        $this->db->listar('courses', $dados);
    }
    
    public function listar(){
        $this->load->database();
        $query = $this->db->get('courses');
        return $query->result();
    }

}
