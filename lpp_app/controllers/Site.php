<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	
    function __construct(){
		parent::__construct();
		
		//load google login library
        $this->load->library('google');
		
		//load user model
		$this->load->model('user');
		$this->load->helper('file');
    }
	
	public function index()
	{
		
		//$this->load->template('index');
		if($this->session->userdata('loggedIn') == true){

			redirect('Profile');
		}
		
		if(isset($_GET['code'])){
			//authenticate user
			$this->google->getAuthenticate();
			
			//get user info from google
			$gpInfo = $this->google->getUserInfo();
			
            //preparing data for database insertion
			$userData['oauth_provider'] = 'google';
			$userData['oauth_uid'] 		= $gpInfo['id'];
            $userData['faculty_name'] 	= $gpInfo['given_name']. ' '.$gpInfo['family_name'];
            $userData['picture_url'] 	= !empty($gpInfo['picture'])?$gpInfo['picture']:'';
			
			//insert or update user data to the database
            $userID = $this->user->checkUser($userData);
			
			//store status & user info in session
			$this->session->set_userdata('loggedIn', true);
			$this->session->set_userdata('userData', $userData);
			
			//redirect to profile page
			redirect('Profile');
		} 
		
		//google login url
		$data['loginURL'] = $this->google->loginURL();
		
		//load google login view
		$this->load->template('index',$data);
    }
	
	public function profile(){
		//redirect to login page if user not logged in
		 
		if(!$this->session->userdata('loggedIn')){
			redirect('index');
		}
		
		//get user info from session
		$data['userData'] = $this->session->userdata('userData');
		
		//load user profile view
		$this->load->template('Profile',$data);
	}
	
	public function logout(){
		//delete login status & user info from session
		$this->session->unset_userdata('loggedIn');
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		
		//redirect to login page
		redirect('index');
    }
}
