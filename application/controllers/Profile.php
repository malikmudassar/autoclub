<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function show()
    {
        $id=$this->uri->segment(3);
        $data['user']=$this->User_model->getUserById($id);
        //echo '<pre>';print_r($data);exit;
        $data['title']=$data['user']['user']['name'].' Welcomes you to his network!';
        $this->load->view('user/content/profile',$data);
    }


}
