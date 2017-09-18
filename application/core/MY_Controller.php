<?php

class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();       
    }
       
    protected function render($_view,$_data = array()){
        $this->load->view('includes/header');
        $this->load->view($_view,$_data);
        $this->load->view('includes/footer');
    
    }
}