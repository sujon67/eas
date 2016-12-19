<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 1:29 PM
 */
class RegisterModel extends CI_Model
{
    public function storeEmployeeInfo($data){
        $this->db->insert('employee_personal_data',$data);
    }
}