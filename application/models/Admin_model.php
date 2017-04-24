<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 4/12/2017
 * Time: 12:41 PM
 */
class Admin_model extends CI_Model {
    function __construct()
    {
        parent::__construct();

    }

    public function insertUser($data)
    {
        $user=array(
            'email' => $data['email'],
            'password' => sha1(md5($data['password'])),
            'name' => $data['name'],
            'phone' => $data['phone'],
            'refer_id' => $data['refer_id'],
            'referal_id' => substr(md5(sha1($data['refer_id'])),0,9)
        );

        $this->db->insert('users',$user);
        return $this->db->insert_id();
    }

    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function getMenuParents()
    {
        return $this->db->select('*')->from('admin_menu')->where('parent',0)->get()->result_array();
    }
    public function addMenuItem($data)
    {
        $item=array(
            'parent'=>$data['parent'],
            'name'=>$data['name'],
            'class'=>$data['class'],
            'url'=>$data['url']
        );

        $this->db->insert('admin_menu',$item);
    }
    public function updateMenuItem($data,$menuId)
    {
        $item=array(
            'parent'=>$data['parent'],
            'name'=>$data['name'],
            'class'=>$data['class'],
            'url'=>$data['url']
        );

        $this->db->WHERE('id',$menuId)->update('admin_menu',$item);
    }
    public function getMenuItems()
    {
        $st=$this->db->select('*')->from('admin_menu')->where('parent',0)->get()->result_array();
        if(count($st)>0)
        {
            for($i=0;$i<count($st);$i++)
            {
                $st[$i]['child']=$this->db->select('*')->from('admin_menu')->where('parent',$st[$i]['id'])->get()->result_array();
            }
        }
        else
        {
            return false;
        }

        return $st;
    }
    public function getAllMenuItems()
    {
        return $this->db->query('SELECT admin_menu.*, a.name as parent from admin_menu left join admin_menu a on a.id=admin_menu.parent')->result_array();
    }
    public function getMenuItemDetail($menuId)
    {
        $st=$this->db->select('*')->from('admin_menu')->WHERE('id',$menuId)->get()->result_array();
        return $st[0];
    }
    public function delAdminMenu($id)
    {
        $this->db->query('DELETE from admin_menu WHERE id='.$id);
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////

    public function getNewUsers()
    {
        return $this->db->select('*')->from('users')->WHERE('status','pending')->get()->result_array();
    }
    public function getOldUsers()
    {
        return $this->db->select('*')->from('users')->WHERE('status','approved')->get()->result_array();
    }

    public function approveUser($id)
    {
        // Approve User

        $status=array(
            'status'=>'approved'
        );
        $this->db->WHERE('id',$id)->UPDATE('users',$status);

        // Create User Vault

        $vault=array(
            'user_id' => $id
        );
        $this->db->insert('user_vault',$vault);

        // Create Reference Relation

        $child=$this->getUserByID($id);
        $parent=$this->getUserIdByReferralId($child['refer_id']);

        $relation=array(
            'user_id'=>$child['id'],
            'parent' => $parent
        );
        $this->db->insert('referentials',$relation);
        // Add payment to company vault

        $this->db->query('UPDATE company_vault SET company_vault.balance=company_vault.balance+1250');
        // Get the levels to send commission to above chain

        /*do
        {
            $row=$this->db->select('parent')->from('referentials')->where('user_id',$id)->get()->row();
            $parent=$row->parent;
            $chain[$i]['parent']=$parent;
            $level++;
            $chain[$i]['level']=$level;
            $i++;
        }while($parent!=0);*/
        $i=0;$level=0;$chain=array();
        $parent=$this->getParent($id);
        while($parent>0)
        {
            $chain[$i]['parent']=$parent;
            $level++;
            $chain[$i]['level']=$level;
            $i++;
            $parent=$this->getParent($parent);
        }

        // Loop through the chain to send commission up

        if(!empty($chain)){
            for($i=0;$i<count($chain);$i++)
            {
                $st=$this->db->query('SELECT rate from level_rates WHERE level='.$chain[$i]['level']); // Get level rates
                $d=$st->result_array();
                $rate=$d[0]['rate'];
                if($chain[$i]['parent']!=0)
                {
                    $amount=intval(($rate/100)*1000);
                    $this->db->query('UPDATE company_vault SET balance=balance-'.$amount);
                    $this->db->query('UPDATE user_vault SET user_vault.value=user_vault.value+'.$amount.' WHERE user_vault.user_id='.$chain[$i]['parent']);
                }
            }
        }
    }

    public function getUserIdByReferralId($referral_id)
    {
        $row=$this->db->WHERE('referal_id',$referral_id)->get('users')->row();
        return $row->id;
    }
    public function getUserByID($id)
    {
        $row=$this->db->WHERE('id',$id)->get('users')->result_array();
        return $row[0];
    }

    public function getParent($id)
    {
        $row=$this->db->select('parent')->from('referentials')->Where('user_id',$id)->get()->row();
        if(count($row)>0)
        {
            return $row->parent;
        }
    }




}