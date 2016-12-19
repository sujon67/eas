<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/4/16
 * Time: 10:52 PM
 */
class PunchModel extends CI_Model
{
    public function punchIn($id){
        $time = date("D M j G:i:s T Y");
        $punchIn = date("H:i:s a",strtotime($time));
        $office_time = "10:00:00 am";
        $status = null;
        if($punchIn > $office_time){
            $status = "Late";
        }else{
           $status = "In time";
        }

        $data = [
            'date' => date("Y-m-d"),
            'employee_id' => $id,
            'punch_in'  => date("H:i:s"),
            'status'    => $status
        ];
        $this->db->insert('punch_in_out', $data);
        $inserId = $this->db->insert_id();
        return $inserId;
    }
    public function punchOut($id, $comment){
        $time = date("H:i:s");
        $this->db->set('punch_out', $time);
        $this->db->set('out_comment', $comment);
        $this->db->where('id', $id);
        $this->db->update('punch_in_out');
    }

    public function checkPunch($id){
        $this->db->select("*")
                ->from("punch_in_out")
                ->where("id", $id);
        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }
}