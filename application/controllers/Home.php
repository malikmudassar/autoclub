<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('');
    }
    public function index()
    {
        $data['title']='Getting Bored | Lets make some money';
        $this->load->view('static/head',$data);
        $this->load->view('static/nav');
        $this->load->view('static/banner');
        $this->load->view('content/home_sections');
        $this->load->view('static/footer');
    }


}
