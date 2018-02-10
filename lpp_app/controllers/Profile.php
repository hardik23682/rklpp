<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->template('profile_view');		
	}
}

/* End of file Profile.php */
/* Location: .//C/xampp/htdocs/lpp/lpp_app/controllers/Profile.php */