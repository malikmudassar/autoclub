<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->isLoggedIn())
        {
            $data['title']='Getting Bored | Lets make some money';
            $this->load->view('static/head',$data);
            $this->load->view('static/nav');
            $this->load->view('static/banner');
            $this->load->view('content/home_sections');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }

    }

    public function isLoggedIn()
    {
        if(isset($this->session->userdata['id']) && isset($this->session->userdata['role'])=='user')
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}
