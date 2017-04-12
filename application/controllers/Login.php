<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title']='Getting Bored | Lets make some money';
        $this->load->view('static/head',$data);
        $this->load->view('content/Login');
    }


}
