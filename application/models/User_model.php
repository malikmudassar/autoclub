<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 4/12/2017
 * Time: 12:41 PM
 */
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function update($table,$data,$id)
    {
        $row=$this->db->select('*')->from($table)->WHERE('user_id',$id)->get()->row();
        if($row)
        {
            $this->db->WHERE('user_id',$id)->UPDATE($table,$data);
        }
        else
        {
            $data['user_id']=$id;
            $this->db->insert($table,$data);
        }
    }

    public function updateHeader($data,$id)
    {
        $row=$this->db->select('*')->from('user_header')->WHERE('user_id',$id)->get()->row();
        if($row)
        {
            $img=array(
              'image' => $data['img'][0]
            );
            $this->db->WHERE('user_id',$id)->UPDATE('user_header',$img);
        }
        else
        {
            $img=array(
                'user_id' => $id,
                'image' => $data['img'][0]
            );
            $this->db->insert('user_header',$img);
        }
    }

    public function getUserImage($id)
    {
        return $this->db->select('*')->from('user_images')->WHERE('user_id',$id)->get()->row();
    }

    public function updateUserImage($image,$id)
    {
        $row=$this->db->select('*')->from('user_images')->WHERE('user_id',$id)->get()->row();
        if($row)
        {
            $img=array(
                'image' => $image
            );
            $this->db->WHERE('user_id',$id)->UPDATE('user_images',$img);
        }
        else
        {
            $img=array(
                'user_id' => $id,
                'image' => $image
            );
            $this->db->insert('user_images',$img);
        }
    }

    public function getRow($table,$id)
    {
        return $this->db->SELECT('*')->from($table)->WHERE('user_id',$id)->get()->row();
    }



}