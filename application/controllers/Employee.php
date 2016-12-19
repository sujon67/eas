<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/3/16
 * Time: 5:28 PM
 */
class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function info(){
        $result['employee'] = $this->EmployeeModel->fetchEmployees();

        $data = [
          'page_content' => $this->load->view('employees',$result, true)
        ];
        $this->parser->parse('master',$data);
    }

}