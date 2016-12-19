<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/3/16
 * Time: 9:22 AM
 */
class PunchOut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function form(){
    $data = [
        'page_content'  => $this->load->view('punchOut','',true)
        ];
        $this->parser->parse('master',$data);
    }
    public function forToday(){
        $last_row_id = $this->session->userdata('lastId');
        $comment = $this->input->post('Comment');
        $this->PunchModel->punchOut($last_row_id, $comment);
        echo "1";
    }

    public function punchOutStatus(){
        $id = $this->input->post("ID");
        $result = $this->PunchModel->checkPunch($id);

        if($result->punch_out != null){
             echo "200";
        }else{
            echo "2000";
        }


    }
}