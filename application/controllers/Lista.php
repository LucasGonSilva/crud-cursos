<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

    public function index() {
        $this->load->model('arquivosmodel');

        $view = array('dados' => $this->arquivosmodel->listar());

        $this->load->view('partes/header');
        $this->load->view('lista/index', $view);
        $this->load->view('partes/footer');
    }

}
