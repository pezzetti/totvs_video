<?php

class GuideTest extends PHPUnit_Framework_TestCase{
    private $CI;
    public function setUp(){
        $this->CI = &get_instance();
        $this->CI->load->model('guide_model');
        $this->guide_model = $this->CI->guide_model;
    }

    public function testSave(){
        $data[0]['campo_formulario'] = 'Test';
        $data[0]['link']  = 'UrlTest';
        $this->assertEquals(true, $this->guide_model->save($data),'Não inseriu');
    }

    public function testGetAll(){
        $all_guides = $this->guide_model->get_all();
        $this->assertEquals(true,!empty($all_guides),'Não pegou dados');
    }

    public function testDelete(){
        $all_guides = $this->guide_model->get_all();
        $last_guide = end($all_guides);
        $this->assertEquals(true,$this->guide_model->delete($last_guide->video_id,'Não deletou'));
    }

}