<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 4/8/2017
 * Time: 3:36 PM
 */
class Test_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getCategoriesByParentId($category_id) {
        $data = $this->db->select('*')->from('autos')->WHERE('parent',$category_id)->get()->result_array();
        for($i=0;$i<count($data);$i++)
        {
            if($this->getCategoriesByParentId($data[$i]['id']))
            {
                $data[$i]['child']=$this->getCategoriesByParentId($data[$i]['id']);
            }
        }
        return $data;
    }

    public function getStuff()
    {
        return $this->db->query('Your query')->result_array();
    }

}