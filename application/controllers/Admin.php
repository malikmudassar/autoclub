<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->Admin_model->getMenuItems();

            $data['title']='Admin Panel | Let you Join';
            $this->load->view('admin/static/head',$data);
            $this->load->view('admin/static/header');
            $this->load->view('admin/static/sidebar');
            $this->load->view('admin/content/dashboard');
            $this->load->view('admin/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }

    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function add_menu()
    {
        if($this->isLoggedIn())
        {
            $data['parents']=$this->Admin_model->getMenuParents();
            $data['menu']=$this->Admin_model->getMenuItems();
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'parent',
                        'label' =>  'Parent',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->Admin_model->getMenuParents();
                    $data['title']='SmartBABA ERP';
                    $this->load->view('admin/static/head',$data);
                    $this->load->view('admin/static/header');
                    $this->load->view('admin/static/sidebar');
                    $this->load->view('admin/content/add_menu');
                    $this->load->view('admin/static/footer');
                }
                else
                {
                    $this->Admin_model->addMenuItem($_POST);
                    $data['success']='Congratulations! Menu Item Added Successfully';
                    $data['parents']=$this->Admin_model->getMenuParents();
                    $data['menu']=$this->Admin_model->getMenuItems();
                    $data['title']='Admin Panel | Let you Join';
                    $this->load->view('admin/static/head',$data);
                    $this->load->view('admin/static/header');
                    $this->load->view('admin/static/sidebar');
                    $this->load->view('admin/content/add_menu');
                    $this->load->view('admin/static/footer');
                }
            }
            else
            {
                $data['parents']=$this->Admin_model->getMenuParents();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Admin Panel | Let you Join';
                $this->load->view('admin/static/head',$data);
                $this->load->view('admin/static/header');
                $this->load->view('admin/static/sidebar');
                $this->load->view('admin/content/add_menu');
                $this->load->view('admin/static/footer');
            }
        }
        else
        {
            redirect(base_url().'Login');
        }

    }
    public function edit_admin_menu()
    {
        if($this->isLoggedIn())
        {
            $menuId=$this->uri->segment(3);
            $data['parents']=$this->Admin_model->getMenuParents();
            $data['menu']=$this->Admin_model->getMenuItems();
            $data['menu_item']=$this->Admin_model->getMenuItemDetail($menuId);
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'parent',
                        'label' =>  'Parent',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->Admin_model->getMenuParents();
                    $data['menu_item']=$this->Admin_model->getMenuItemDetail($menuId);
                    $data['title']='Admin Panel | Let you Join';
                    $this->load->view('admin/static/head',$data);
                    $this->load->view('admin/static/header');
                    $this->load->view('admin/static/sidebar');
                    $this->load->view('admin/content/edit_admin_menu');
                    $this->load->view('admin/static/footer');
                }
                else
                {
                    $this->Admin_model->updateMenuItem($_POST,$menuId);
                    $data['success']='Congratulations! Menu Item Updated Successfully';
                    $data['parents']=$this->Admin_model->getMenuParents();
                    $data['menu']=$this->Admin_model->getMenuItems();
                    $data['menu_item']=$this->Admin_model->getMenuItemDetail($menuId);
                    $data['title']='Admin Panel | Let you Join';
                    $this->load->view('admin/static/head',$data);
                    $this->load->view('admin/static/header');
                    $this->load->view('admin/static/sidebar');
                    $this->load->view('admin/content/edit_admin_menu');
                    $this->load->view('admin/static/footer');
                }
            }
            else
            {
                $data['parents']=$this->Admin_model->getMenuParents();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Admin Panel | Let you Join';
                $this->load->view('admin/static/head',$data);
                $this->load->view('admin/static/header');
                $this->load->view('admin/static/sidebar');
                $this->load->view('admin/content/edit_admin_menu');
                $this->load->view('admin/static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function del_admin_menu()
    {
        $menuId=$this->uri->segment(3);
        $this->Admin_model->delAdminMenu($menuId);
        redirect(base_url().'admin/manage_admin_menu');
    }
    public function manage_admin_menu()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->Admin_model->getMenuItems();
            $data['menu_items']=$this->Admin_model->getAllMenuItems();
            //echo '<pre>';print_r($data);exit;
            $data['title']='Admin Panel | Let you Join';
            $this->load->view('admin/static/head',$data);
            $this->load->view('admin/static/header');
            $this->load->view('admin/static/sidebar');
            $this->load->view('admin/content/manage_admin_menu');
            $this->load->view('admin/static/footer');
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////

    public function isLoggedIn()
    {
        if(isset($this->session->userdata['id']) && isset($this->session->userdata['role'])=='admin')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }


}
