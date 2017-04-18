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

    public function getUserById($id)
    {
        $st=$this->db->select('*')->from('users')->WHERE('id',$id)->get()->result_array();
        $data['user']=$st[0];
        $st=$this->db->select('image')->from('user_images')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['image']=$st->image;
        }
        else
        {
            $data['image']=array();
        }

        $st=$this->db->select('image')->from('user_header')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['header']=$st->image;
        }
        else
        {
            $data['header']=array();
        }

        $st=$this->db->select('about')->from('user_about')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['about']=$st->about;
        }
        else
        {
            $data['about']=array();
        }

        $st=$this->db->select('education')->from('user_education')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['education']=$st->education;
        }
        else
        {
            $data['education']=array();
        }

        $st=$this->db->select('experience')->from('user_experience')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['experience']=$st->experience;
        }
        else
        {
            $data['experience']=array();
        }

        $st=$this->db->select('communities')->from('user_communities')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['communities']=$st->communities;
        }
        else
        {
            $data['communities']=array();
        }

        $st=$this->db->select('hobbies')->from('user_hobbies')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['hobbies']=$st->hobbies;
        }
        else
        {
            $data['hobbies']=array();
        }

        $st=$this->db->select('passions')->from('user_passions')->WHERE('user_id',$id)->get()->row();
        if(!empty($st))
        {
            $data['passions']=$st->passions;
        }
        else
        {
            $data['passions']=array();
        }

        return $data;
    }

    public function getRow($table,$id)
    {
        return $this->db->SELECT('*')->from($table)->WHERE('user_id',$id)->get()->row();
    }



}