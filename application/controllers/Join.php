<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Join_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title']='Getting Bored | Lets make some money';
        if($_POST)
        {
            $config=array(
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required',
                ),
                array(
                    'field' => 'conf_password',
                    'label' => 'Confirm Password',
                    'rules' => 'trim|required|matches[password]',
                ),
            );
            $this->form_validation->set_rules($config);
            if($this->form_validation->run()==false)
            {
                $data['errors']=validation_errors();
                $this->load->view('static/head',$data);
                $this->load->view('static/nav');
                $this->load->view('content/join');
                $this->load->view('static/footer');
            }
            else
            {
                $check=$this->Join_model->insertUser($this->security->xss_clean($_POST));
                if($check)
                {
                    $this->load->view('static/head',$data);
                    $this->load->view('static/nav');
                    $this->load->view('content/success');
                    $this->load->view('static/footer');
                }
                else
                {
                    $data['errors']='Sorry! The Refer ID you have provided does\'nt belong to our System';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/nav');
                    $this->load->view('content/join');
                    $this->load->view('static/footer');
                }
            }
        }
        else
        {
            $this->load->view('static/head',$data);
            $this->load->view('static/nav');
            $this->load->view('static/nav_parallex');
            $this->load->view('content/join');
            $this->load->view('static/footer');
        }

    }


}
