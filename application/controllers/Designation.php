<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/22/16
 * Time: 2:07 AM
 */
class Designation extends  CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function designation (){
        $data = [
            'page_content' => $this->load->view('designation','', true)
        ];
        $this->parser->parse('master',$data);
    }
}