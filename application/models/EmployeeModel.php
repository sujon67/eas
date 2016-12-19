<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 1:56 PM
 */
class EmployeeModel extends CI_Model
{
    public function fetchEmployees(){
        $this->db->select('*')
                    ->from('employee_personal_data');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }
}