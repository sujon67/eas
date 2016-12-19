<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/5/16
 * Time: 2:19 AM
 */
class SummaryModel extends CI_Model
{
    public function attendenceStatus(){
        $id = $this->session->userdata('userId');
        $this->db->select("*")
            ->from("punch_in_out")
            ->where("employee_id", $id);
        $query = $this->db->get();
        $result = $query->result();

        return $result;

    }
}