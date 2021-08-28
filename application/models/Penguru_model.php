<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Penguru_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get penguru by id
     */
    function get_penguru($id)
    {
        $penguru = $this->db->query("
            SELECT
                *

            FROM
                `pengurus`

            WHERE
                `id` = ?
        ",array($id))->row_array();

        return $penguru;
    }
        
    /*
     * Get all pengurus
     */
    function get_all_pengurus()
    {
        $pengurus = $this->db->query("
            SELECT
                *

            FROM
                `pengurus`

            WHERE
                1 = 1

            ORDER BY `id` DESC
        ")->result_array();

        return $pengurus;
    }
        
    /*
     * function to add new penguru
     */
    function add_penguru($params)
    {
        $this->db->insert('pengurus',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update penguru
     */
    function update_penguru($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('pengurus',$params);
    }
    
    /*
     * function to delete penguru
     */
    function delete_penguru($id)
    {
        return $this->db->delete('pengurus',array('id'=>$id));
    }
}
