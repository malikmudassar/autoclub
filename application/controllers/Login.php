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
                $user=$this->Join_model->checkUser($this->security->xss_clean($_POST));
                if($user)
                {
                    redirect(base_url().'/'.$user['role']);
                }
            }
        }
        else
        {
            $this->load->view('static/head',$data);
            $this->load->view('content/Login');
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
