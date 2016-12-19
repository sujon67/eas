<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/3/16
 * Time: 1:16 AM
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function index(){
        $data = [
            'page_content' => $this->load->view('home','',true)
        ];

        $this->parser->parse('master',$data);
    }
}