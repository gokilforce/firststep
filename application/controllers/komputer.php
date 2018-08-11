<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Komputer extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_komputer');
    }
    function index(){
        $data = array();
        $get = $this->model_komputer->data_komputer();
        $data ['komputer'] = $get;
        $this->load->view('view_komputer',$data);
    }
}

