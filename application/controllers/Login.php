<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if(!$this->isLoggedIn())
        {
            $data['title']='Getting Bored | Lets make some money';
            if($_POST)
            {
                $config=array(
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required',
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                    ),
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $this->load->view('static/head',$data);
                    $this->load->view('content/Login');
                }
                else
                {
                    $post=$this->security->xss_clean($_POST);
                    $user=$this->Login_model->checkUser($post);
                    if($user)
                    {
                        $this->session->set_userdata($user);
                        redirect(base_url().$user['role']);
                    }
                    else
                    {
                        $data['errors']='Sorry! The credentials provided are not Correct. Please Contact Administrator';
                        $this->load->view('static/head',$data);
                        $this->load->view('content/Login');
                    }
                }
            }
            else
            {
                $this->load->view('static/head',$data);
                $this->load->view('content/Login');
            }
        }
        else
        {
            redirect(base_url().$this->session->userdata['role']);
        }


    }

    public function isLoggedIn()
    {
        if(isset($this->session->userdata['id']) && isset($this->session->userdata['role']))
        {
            return $this->session->userdata['role'];
        }
        else
        {
            return false;
        }
    }


}
