 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
 
 	public function index()
 	{
		$this->load->template('director/dashboard_view'); 		
	 }
	 public function view(){
		 $this->load->template('director/term_view');
	 }
 }
 
 
 