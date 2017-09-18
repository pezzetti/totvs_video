<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends MY_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->model('guide_model');
    }

    public function index(){
    	$data['guides'] = $this->guide_model->get_all();
		$this->render('list_guide',$data);
	}

	public function newGuide(){
		$this->render('guide');
	}

	public function save(){
	    $data = array();
	    for ($i=0; $i< count($this->input->post('campo_formulario'));$i++){
	    	$replace_watch = str_replace('watch?v=', 'embed/', $this->input->post('link')[$i]);
	        $data[] = array('campo_formulario' =>$this->input->post('campo_formulario')[$i],
                            'link' => $replace_watch);
        }
        $this->guide_model->save($data);
        $this->session->set_flashdata('message', 'Salvo com sucesso !');
        $this->render('guide');
    }

    public function delete($_id){    
    	$this->guide_model->delete($_id);
        $this->session->set_flashdata('message', 'Excluído com sucesso !');
        $this->index();
    }


}
