<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 2:36 PM
 */
class LoginModel extends CI_Model
{
    public function namePasswordCheck($username){

        $this->db->select('*')
                    ->from('employee_personal_data')
                    ->where('user_name',$username);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
}