<?php

class Courses extends CI_Controller 
{
    public function index() 
    {
        echo 'Courses::index()';
    }
    
    public function view($id) 
    {
     echo 'Pages::view('. $id .')';   
    }
}
