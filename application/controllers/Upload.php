<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function index() {
        $this->load->view('partes/header');
        $this->load->view('upload/index');
        $this->load->view('partes/footer');
    }

    public function subir() {
        $nome = $this->input->post('name');
        $arquivo = $_FILES['arquivo'];
        
        $trim = trim($nome);
        
        $config = array(
            'upload_path' => 'public/upload',
            'allowed_types' => 'jpg',
            'file_name' => rand(1,98769) . $trim . '.jpg',
            'max_size' => '30000000'
        );
        $this->load->library('upload');
        $this->upload->initialize($config);
        if($this->upload->do_upload('arquivo') == true){
            
            $this->load->library('zip');
            $this->zip->add_data('public/upload/' . $config['file_name']);
            
            $this->zip->archive('public/upload/' . $config['file_name'] . '.zip');
            
            
            $dados = array(
                'main_image' => $nome,
                'arquivo' => $config['file_name'],
                'zip' => $config['file_name'] . '.zip'
            );
            
            $this->load->model('arquivosmodel');
            $this->arquivosmodel->inserir($dados);
            echo "Arquivo Upado";
        }else{
            echo $this->upload->display_errors();
        }
    }

}
