<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/3/16
 * Time: 9:55 AM
 */
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('userId');
        if($id == null){
            redirect('Login');
        }
    }
    public function employee(){
        $data = [
            'page_content'  => $this->load->view('register/register', ' ',  true)
        ];
        $this->parser->parse('master',$data);
    }

    public function validate(){
        $data = [
            'name'  => $this->input->post('name'),
            'gender'    =>  $this->input->post('gender'),
            'date_birth' => $this->input->post('date_birth'),
            'join_date' =>$this->input->post('join_date'),
            'user_name' =>  $this->input->post('user_name')
        ];

        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' => 'gender',
                'label' => 'Gender',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' =>  'date_birth',
                'label' =>  'Date of birth',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' => 'join_date',
                'label' =>  'Joining date',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' => 'user_name',
                'label' =>  'User name',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            ),
            array(
                'field' =>  'password',
                'label' =>  'Password',
                'rules' =>  'required',
                'errors' => array('required' => 'Enter your %s.')
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $data = [
                'page_content' => $this->load->view('register/register','', true)
            ];
            $this->parser->parse('master',$data);
        }
        else
        {
            $password = $this->input->post('password');
            $data['password'] = $this->bcrypt->hash_password($password);
            $this->RegisterModel->storeEmployeeInfo($data);
            $this->session->set_flashdata('success','Your information is successfully registered.');
            redirect('Register/employee');
        }
    }
}