<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_penduduk');
    }
    function index(){
        $data = array();
        $ambil = $this->model_penduduk->data_penduduk();
        $data ['penduduk'] = $ambil;
        $this->load->view('view_penduduk',$data);
    }
}