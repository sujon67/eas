<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 9:13 PM
 */
class Logout extends CI_Controller
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
        $this->session->unset_userdata('userId' , 'userName');
        redirect("Login");
    }
}