<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthHook
 *
 * @author Lucas Silva
 */
class AuthHook {
    
    private $controller = [
        'auth'
    ];

    public function check() {
        $CI =& get_instance();
        
        if(!isset($CI->session)){
            $CI->load->library('session');
        };
        $CI->load->helper('url');
        
        $user = $CI->session->user ?? null;
        $controller = $CI->uri->segment(1);
        
        if(!$user and !in_array($controller, $this->controller)){
            redirect('auth/login', 'location', 302);
            die;
        }
    }

}
