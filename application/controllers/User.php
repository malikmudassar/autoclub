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
    ////////////////////////////////////
    /////   SECTION PROFILE  STARTS ////
    ////////////////////////////////////
    public function picture()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/picture');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function header()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/header');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function about()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/about');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function education()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/education');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function experience()
    {
        if($this->isLoggedIn())
        {
            if($_POST)
            {
                echo '<pre>';print_r($_POST);exit;
            }
            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/experience');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function awards()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/awards');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function communities()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/communities');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function hobbies()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/hobbies');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function passion()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/passion');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    public function gallery()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/gallery');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }

    public function profile()
    {
        if($this->isLoggedIn())
        {

            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/profile');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    ////////////////////////////////////
    /////   SECTION PROFILE ENDS    ////
    ////////////////////////////////////

    ////////////////////////////////////
    ////    SECTION NETWORK STARTS   ///
    ////////////////////////////////////

    public function referred_by()
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
    public function refers()
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
    public function updates()
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
    public function network_id()
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
    ////////////////////////////////////
    ////    SECTION NETWORK ENDS     ///
    ////////////////////////////////////
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
