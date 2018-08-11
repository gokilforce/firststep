<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_komputer extends CI_model {
function data_komputer(){
    $query=$this->db->get('komputer');
    $data=$query->result();
    return $data;
}
}
