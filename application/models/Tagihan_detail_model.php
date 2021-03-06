<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tagihan_detail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tagihan_detail by id
     */
    function get_tagihan_detail($id)
    {
        $tagihan_detail = $this->db->query("
            SELECT
                *

            FROM
                `tagihan_detail`

            WHERE
                `id` = ?
        ",array($id))->row_array();

        return $tagihan_detail;
    }
        
    /*
     * Get all tagihan_detail
     */
    function get_all_tagihan_detail()
    {
        $tagihan_detail = $this->db->query("
            SELECT
                *

            FROM
                `tagihan_detail`

            WHERE
                1 = 1

            ORDER BY `id` DESC
        ")->result_array();

        return $tagihan_detail;
    }
        
    /*
     * function to add new tagihan_detail
     */
    function add_tagihan_detail($params)
    {
        $this->db->insert('tagihan_detail',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tagihan_detail
     */
    function update_tagihan_detail($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tagihan_detail',$params);
    }
    
    /*
     * function to delete tagihan_detail
     */
    function delete_tagihan_detail($id)
    {
        return $this->db->delete('tagihan_detail',array('id'=>$id));
    }
}
