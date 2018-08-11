<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penduduk extends CI_model {
function data_penduduk(){
    $query = $this->db->get('penduduk');
    $data = $query->result();
    return $data;
}
}
