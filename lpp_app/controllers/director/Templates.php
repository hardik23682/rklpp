<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Templates extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->helper('form');
        //$this->load->library('form_validation');
        $this->load->model('template');
    }
	public function index(){
        $data = array();
        /* 
        //get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        $data['templates'] = $this->template->getRows();
         */$data['title'] = 'Templates Archive';
        
        //load the list page view
       // $this->load->view('templates/header', $data);
        $this->load->view('TemplateDetails', $data);
       // $this->load->view('templates/footer');
    }
    
    /*
     * Term details
     */
    public function view($id=''){
		$ret = '';
        /* if($id.empty()){ */
			$ret = 	$this->template->getRows();
		/* }else{
			$ret = $this->template->get($id);
		} */
		echo json_encode($ret);
    }
    
    /*
     * Add post content
     */
    public function add(){
        $data = array();
        $termData = array();
        //prepare term data
        $templateData = array(
            'school' => $this->input->post('school'),
            'template_name' => $this->input->post('tempName')
            
        );
            
        $insert = $this->template->insert($templateData);

        if($insert){
            echo "Template added successfully";
		}else{
            echo 'Some problems occurred, please try again.';
        }
    }
    
    /*
     * Update term content
     */
    public function edit($id){
        $ret = 	$this->template->getRows($id);
		echo json_encode($ret);
    }
    
    /*
     * Delete term data
     */
    public function delete($id){
        //check whether term id is not empty
        if($id){
            //delete post
            $delete = $this->term->delete($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Term has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }

        redirect('/terms');
    }
	
}
?>