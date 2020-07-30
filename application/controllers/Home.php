<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('coursesmodel');
    }

    public function index() {
        $result = $this->coursesmodel->get();
        $this->load->view('includes/header');
        $this->load->view('home/index', ['courses' => $result]);
        $this->load->view('includes/footer');
    }

}
