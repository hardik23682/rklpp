<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Director extends CI_Model{
	/*
     * Get Terms
     */
    function getTermRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('term_details', array('id' => $id,'status'=>1));
            return $query->result_array();
        }else{
            
         $query = $this->db->get_where('term_details', array('status'=>1));
            return $query->result_array();
        }
    }
	/*
     * Insert term
     */
    public function insertTerm($data = array()) {
        $insert = $this->db->insert('term_details', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    /*
     * Update term
     */
    public function updateTerm($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('term_details', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete term
     */
    public function deleteTerm($id){
        $delete = $this->db->delete('term_details',array('id'=>$id));
        return $delete?true:false;
    }
    /*
    * GetTemplate
     */
	public function getTemplateRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('template_details', array('temp_id' => $id));
            return $query->result_array();
        }else{
            $query = $this->db->get('template_details');
            return $query->result_array();
        }
    }
    /*
    *Insert Template 
    */
    public function insertTemplate($data = array()) {
        $insert = $this->db->insert('template_details', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Update template
     */
    public function updateTemplate($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('template_details', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete template
     */
    public function deleteTemplate($id){
        $delete = $this->db->delete('template_details',array('temp_id'=>$id));
        return $delete?true:false;
    }
     /*
    * GetHoliday
     */
	public function getHolidayRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('holliday_details', array('temp_id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('template_details');
            return $query->result_array();
        }
    }
}
?>