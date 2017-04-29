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
            $data['earnings']=$this->User_model->getEarnings($this->session->userdata['id']);
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
            $data['pic']=$this->User_model->getUserImage($this->session->userdata['id']);
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
    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile1'))
        {
            $data['errors'] = $this->upload->display_errors();
            $data['title']='Dashboard | Let you Join';
            $data['pic']=$this->User_model->getUserImage($this->session->userdata['id']);
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/picture');
            $this->load->view('user/static/footer');
        }
        else
        {
            $upload_data = $this->upload->data();
            $file_name=$upload_data['file_name'];
            $this->User_model->updateUserImage($file_name,$this->session->userdata['id']);
            $data['success']='Congratulations! Image Updated Successfully';
            $data['title']='Dashboard | Let you Join';
            $data['pic']=$this->User_model->getUserImage($this->session->userdata['id']);
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/picture');
            $this->load->view('user/static/footer');
        }
    }
    public function header()
    {
        if($this->isLoggedIn())
        {
            $data['header']=$this->User_model->getRow('user_header',$this->session->userdata['id']);
            //echo '<pre>';echo $data['header']->image;exit;
            if($_POST)
            {
                $this->User_model->updateHeader($_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['header']=$this->User_model->getRow('user_header',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';

                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/header');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/header');
                $this->load->view('user/static/footer');
            }
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
            $data['about']=$this->User_model->getRow('user_about',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_about',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['about']=$this->User_model->getRow('user_about',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/about');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/about');
                $this->load->view('user/static/footer');
            }
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
            $data['education']=$this->User_model->getRow('user_education',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_education',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['education']=$this->User_model->getRow('user_education',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/education');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/education');
                $this->load->view('user/static/footer');
            }
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
            $data['experience']=$this->User_model->getRow('user_experience',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_experience',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['experience']=$this->User_model->getRow('user_experience',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/experience');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/experience');
                $this->load->view('user/static/footer');
            }
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
            $data['awards']=$this->User_model->getRow('user_awards',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_awards',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['awards']=$this->User_model->getRow('user_awards',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/awards');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/awards');
                $this->load->view('user/static/footer');
            }
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
            $data['communities']=$this->User_model->getRow('user_communities',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_communities',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['communities']=$this->User_model->getRow('user_communities',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/communities');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/communities');
                $this->load->view('user/static/footer');
            }
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
            $data['hobbies']=$this->User_model->getRow('user_hobbies',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_hobbies',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['hobbies']=$this->User_model->getRow('user_hobbies',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/hobbies');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/hobbies');
                $this->load->view('user/static/footer');
            }
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
            $data['passions']=$this->User_model->getRow('user_passions',$this->session->userdata['id']);
            if($_POST)
            {
                $this->User_model->update('user_passions',$_POST,$this->session->userdata['id']);
                $data['success']='Record Successfully Updated';
                $data['passions']=$this->User_model->getRow('user_passions',$this->session->userdata['id']);
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/passion');
                $this->load->view('user/static/footer');
            }
            else
            {
                $data['title']='Dashboard | Let you Join';
                $this->load->view('user/static/head',$data);
                $this->load->view('user/static/header');
                $this->load->view('user/static/sidebar');
                $this->load->view('user/content/passion');
                $this->load->view('user/static/footer');
            }
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
            $data['referred_by']=$this->User_model->getReferredBy($this->session->userdata['id']);
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/referred_by');
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
            $data['refers']=$this->User_model->getRefers($this->session->userdata['referal_id']);
            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/refers');
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
            $data['updates']=array();
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/updates');
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
            $this->load->view('user/content/network_id');
            $this->load->view('user/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }

    public function earnings()
    {
        if($this->isLoggedIn())
        {
            $data['earnings']=$this->User_model->getEarnings($this->session->userdata['id']);
            $data['title']='Dashboard | Let you Join';
            $this->load->view('user/static/head',$data);
            $this->load->view('user/static/header');
            $this->load->view('user/static/sidebar');
            $this->load->view('user/content/earnings');
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
