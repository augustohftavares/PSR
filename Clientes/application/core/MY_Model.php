<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    /* 
     *represents the database table
     */
    var $table = "";

    function __construct() {
        parent::__construct();
    }

    /*
     * $array data to be entered
     * @return boolean and receive array
     */
    public function Insert($data) {

        if(!isset($data)) 
            return false;

        return $this->db->insert($this->table, $data);
    }

    /* 
     *  $int id get item by id
     *  @return array
     */
    function GetById($id) {

        if(is_null($id))
            return false;

        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        
        if($query->num_rows() > 0)
            return $query->row_array();
        else 
            return null;
    }

    /*
     *  $sort Field to sort records
     *  $order Sort type: ASC ou DESC
     *  @return array
     */
    function GetAll($sort = 'id', $order = 'asc') {

        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0)
            return $query->result_array();
        else
            return null;
    }

    /*
     *  $int id of the register to be updated
     *  $data data to be entered
     *  @return boolean
     */
    function Update($id, $data) {

        if(is_null($id) || !isset($data))
            return false;
        
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /*
     *  $int id of the register to be deleted
     *  @return boolean
     */
    function Delete($id) {

        if(is_null($id)) 
            return false;

        $this->db->where('id', $id);

        return $this->db->delete($this->table);

    }

}//end class MY_Model

?>