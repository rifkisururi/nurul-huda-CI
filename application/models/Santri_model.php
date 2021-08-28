<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Santri_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get santri by id
     */
    function get_santri($id)
    {
        $santri = $this->db->query("
            SELECT
                *

            FROM
                `santri`

            WHERE
                `id` = ?
        ",array($id))->row_array();

        return $santri;
    }
        
    /*
     * Get all santri
     */
    function get_all_santri()
    {
        $santri = $this->db->query("
            SELECT
                *

            FROM
                `santri`

            WHERE
                1 = 1

            ORDER BY `id` DESC
        ")->result_array();

        return $santri;
    }
        
    /*
     * function to add new santri
     */
    function add_santri($params)
    {
        $this->db->insert('santri',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update santri
     */
    function update_santri($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('santri',$params);
    }
    
    /*
     * function to delete santri
     */
    function delete_santri($id)
    {
        return $this->db->delete('santri',array('id'=>$id));
    }
}
