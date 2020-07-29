<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursesModel
 *
 * @author Lucas Silva
 */
class CoursesModel extends CI_Model {
    
    private $table_name = 'courses';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null) {
        if ($id === null) {
            $query = $this->db->get($this->table_name);
            return $query->result();
        }
        $query = $this->db->get_where($this->table_name, ['id' => $id]);
        return $query->first_row();
    }

    public function create() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', true);

        $data = [
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'slug' => $slug
        ];

        return $this->db->insert($this->table_name, $data);
    }
    
    public function update($id)
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', true);

        $data = [
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'slug' => $slug
        ];
        $this->db->where('id', $id);
        
        return $this->db->update($this->table_name, $data);
    }
    
    public function delete($id)
    {
        return $this->db->delete($this->table_name, ['id' => $id]);
    }

}
