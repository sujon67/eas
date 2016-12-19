<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/3/16
 * Time: 9:43 AM
 */
class Attendence extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function history(){
    $sdata['result'] = $this->SummaryModel->attendenceStatus();
        $data = [
            'page_content'  => $this->load->view('summery',$sdata ,  true)
        ];
        $this->parser->parse('master',$data);
    }
}