<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 4/12/2017
 * Time: 12:41 PM
 */
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function checkUser($data)
    {
        $st=$this->db->select('*')->from('users')
            ->WHERE('email',$data['email'])
            ->WHERE('password',sha1(md5($data['password'])))
            ->get()->result_array();
        if(count($st)>0)
        {
            if($st[0]['status']=='approved')
            {
                return $st[0];
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

}