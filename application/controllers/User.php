<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/dashboard');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
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
