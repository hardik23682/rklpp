 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('director');
    }
 	public function index()
 	{	
		$this->load->template('director/dashboard_view'); 		
	}
	 public function term(){
		 $this->load->template('director/term_view');
	 }
	 public function template(){
		 $this->load->template('director/template_view');
     }
     public function holiday(){
        $this->load->template('director/holiday_view');
    }
	 public function addTerm(){
		$data = array();
		$termData = array();
		//if add request is submitted
     //   if($this->input->post('termSubmit')){
            // //form field validation rules
            // $this->form_validation->set_rules('school', 'term school', 'required');
            // $this->form_validation->set_rules('start_dt', 'term start date', 'required');
            // $this->form_validation->set_rules('end_dt', 'term end date', 'required');
            
            
            //prepare term data
            $termData = array(
                'school' => $this->input->post('school'),
                'start_dt' => $this->input->post('start_dt'),
                'end_dt' => $this->input->post('end_dt')
            );
            
            //validate submitted form data
            // if($this->form_validation->run() == true){
                //insert term data
                $insert = $this->director->insertTerm($termData);

                if($insert){
                    echo 'Term has been added successfully.';
                  //  $this->session->set_userdata('success_msg', 'Term has been added successfully.');
                   // redirect('/terms');
                }else{
                   // $data['error_msg'] = 'Some problems occurred, please try again.';
                   echo 'Some problems occurred, please try again.'.$this->input->post('school').' value';
                }
            // }
       // }
     }
     public function deleteTerm(){
        $id =  $this->input->post('id');
        $ret = '';
        $ret = $this->director->deleteTerm($id);
        if($ret){
            echo 'Term has been deleted successfully.';
          //  $this->session->set_userdata('success_msg', 'Term has been added successfully.');
           // redirect('/terms');
        }else{
           // $data['error_msg'] = 'Some problems occurred, please try again.';
           echo 'Some problems occurred, please try again.';
        }
        
        
     }
     public function deleteTemplate(){
        $id =  $this->input->post('id');
        $ret = '';
        $ret = $this->director->deleteTemplate($id);
        if($ret){
            echo 'Template has been deleted successfully.';
          //  $this->session->set_userdata('success_msg', 'Term has been added successfully.');
           // redirect('/terms');
        }else{
           // $data['error_msg'] = 'Some problems occurred, please try again.';
           echo 'Some problems occurred, please try again.';
        }
        
        
     }
     public function viewTerm(){
        $ret = '';
        $ret = $this->director->getTermRows();
        echo json_encode($ret);
     }
     public function editTerm($id){
       // $id = $this->input->post('id');
		//echo "id = ".$id;
        $ret = '';
        $ret = $this->director->getTermRows($id);
        echo json_encode($ret);
     }
	 public function editTemplate($id){
       // $id = $this->input->post('id');
		//echo "id = ".$id;
        $ret = '';
        $ret = $this->director->getTemplateRows($id);
        echo json_encode($ret);
     }
     public function viewTemplate(){
        $ret = '';
        $ret = $this->director->getTemplateRows();
        echo json_encode($ret);
     }
     public function addTemplate(){
		$data = array();
		$templateData = array();
		//if add request is submitted
     //   if($this->input->post('termSubmit')){
            // //form field validation rules
            // $this->form_validation->set_rules('school', 'term school', 'required');
            // $this->form_validation->set_rules('start_dt', 'term start date', 'required');
            // $this->form_validation->set_rules('end_dt', 'term end date', 'required');
            
            
            //prepare term data
            $templateData = array(
                'school' => $this->input->post('school'),
                'template_name' => $this->input->post('tempName')
            );
            
            //validate submitted form data
            // if($this->form_validation->run() == true){
                //insert term data
                $insert = $this->director->insertTemplate($templateData);

                if($insert){
                    echo 'Template has been added successfully.';
                
                }else{
                  
                   echo 'Some problems occurred, please try again.';
                }
            // }
       // }
     }
	 public function updateTemplate(){
		$data = array();
		$templateData = array();
		//if add request is submitted
     //   if($this->input->post('termSubmit')){
            // //form field validation rules
            // $this->form_validation->set_rules('school', 'term school', 'required');
            // $this->form_validation->set_rules('start_dt', 'term start date', 'required');
            // $this->form_validation->set_rules('end_dt', 'term end date', 'required');
            
            $id = $this->input->post('tempID');
            //prepare term data
            $templateData = array(
				'temp_id' => $id,
                'school' => $this->input->post('school'),
                'template_name' => $this->input->post('tempName')
            );
            
            //validate submitted form data
            // if($this->form_validation->run() == true){
                //insert term data
                $insert = $this->director->insertTemplate($templateData);

                if($insert){
                    echo 'Template has been added successfully.';
                
                }else{
                  
                   echo 'Some problems occurred, please try again.';
                }
            // }
       // }
     }
     public function updateTerm(){
		$data = array();
		$termData = array();
		//if add request is submitted
     //   if($this->input->post('termSubmit')){
            // //form field validation rules
            // $this->form_validation->set_rules('school', 'term school', 'required');
            // $this->form_validation->set_rules('start_dt', 'term start date', 'required');
            // $this->form_validation->set_rules('end_dt', 'term end date', 'required');
            
            $id = $this->input->post('termID');
            //prepare term data
            $termData = array(
                'id' => $id,
                'school' => $this->input->post('school'),
                'start_dt' => $this->input->post('start_dt'),
                'end_dt' => $this->input->post('end_dt')
            );
            
            //validate submitted form data
            // if($this->form_validation->run() == true){
                //insert term data
                $insert = $this->director->updateTerm($termData,$id);

                if($insert){
                    echo 'Term has been updated successfully.';
                  //  $this->session->set_userdata('success_msg', 'Term has been added successfully.');
                   // redirect('/terms');
                }else{
                   // $data['error_msg'] = 'Some problems occurred, please try again.';
                   echo 'Some problems occurred, please try again.';
                }
            // }
       // }
     }
	 public function tempTranscation($id){
		$ret = '';
        $ret = $this->director->getTemplateRows($id);
        //var_dump($ret);
		$data = array(
			'temp_id'=> $ret[0]['temp_id'],
			'temp_name'=> $ret[0]['template_name'],
			'school'=> $ret[0]['school']
			
		);	
		$this->load->template('director/template_transaction',$data); 	
	 }

 }
 
 
 