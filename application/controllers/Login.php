<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 2:21 PM
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id != null){
            redirect('Home');
        }
    }
    public function index(){
        $this->load->view('login');
    }
    public function validation(){
         $config = array(
            array(
                'field' => 'username',
                'label' => 'User name',
                'rules' => 'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data['password'] = $this->bcrypt->hash_password($password);
            $result = $this->LoginModel->namePasswordCheck($username);
            if(count($result) == 0){
                $this->session->set_flashdata('notification','Name doesn\'t exist.');
                redirect('Login');
            }else if($this->bcrypt->check_password($password, $result->password)){
                $lastId = $this->PunchModel->punchIn($result->id);
                $sdata= [
                    'userId' => $result->id,
                    'userName' => $result->user_name,
                    'lastId'    => $lastId
                ];
                $this->session->set_userdata($sdata);
                redirect("Home");
            }else{
                $this->session->set_flashdata('notification2','Password doesn\'t match.');
                $this->load->view('login');
            }
        }
    }
}