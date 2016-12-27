<?php

/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/27/16
 * Time: 12:37 AM
 */
class Bill extends CI_Controller
{
    public function generate(){
        $data= [
            'page_content' => $this->load->view("bill",'',true)
        ];

        $this->parser->parse("master",$data);
    }
}