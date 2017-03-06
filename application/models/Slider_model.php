<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 12/8/2015
 * Time: 2:58 PM
 */
class Slider_model extends MY_Model
{
    var $table = 'slider' ;

    function getRecords(){
        return $this->db->from($this->table)
            ->get()->result();
    }


    function create()
    {
        $this->db->truncate($this->table);
        foreach($this->input->post('image') as $img )
            $d[] = array('image'=>$img);

        if(isset($d) && !empty($d) )
            return $this->db->insert_batch($this->table,$d) ? true : false ;
        return true ;

    }


}