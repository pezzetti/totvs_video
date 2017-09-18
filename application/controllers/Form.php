<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('guide_model');
    }

    public function index(){
        $all_guides = $this->guide_model->get_all();
        $data = array();
        foreach($all_guides as $guide){
            $data[$guide->campo_formulario] = $guide->link;
        }
        $this->render('form',$data);
	}
}
