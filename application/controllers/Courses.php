<?php

class Courses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('coursesmodel');
    }

    public function index() {
        $result = $this->coursesmodel->get();

        $this->load->view('template/header');
        $this->load->view('courses/index', ['courses' => $result]);
        $this->load->view('template/footer');
    }

    public function view($id) {
        $course = $this->coursesmodel->get($id);
        
        $this->load->view('template/header');
        $this->load->view('courses/view', ['course' => $course]);
        $this->load->view('template/footer');
    }

    public function create() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Título', 'required');
        $this->form_validation->set_rules('body', 'Conteúdo', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('template/header');
            $this->load->view('courses/create');
            $this->load->view('template/footer');
        } else {
            $data['back'] = '/courses';
            $this->coursesmodel->create();
            $this->load->view('template/success', $data);
        }
    }

    public function edit($id = null) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Título', 'required');
        $this->form_validation->set_rules('body', 'Conteúdo', 'required');

        if ($this->form_validation->run() === false) {
            $course = $this->coursesmodel->get($id);
            $this->load->view('template/header');
            $this->load->view('courses/edit', ['course' => $course]);
            $this->load->view('template/footer');
        } else {
            $data['back'] = '/courses/' . $id;
            $this->coursesmodel->update($id);
            $this->load->view('template/success', $data);
        }
    }

    public function delete($id) {
        $data['back'] = '/courses';
        $this->coursesmodel->delete($id);
        $this->load->view('template/success', $data);
    }

}
