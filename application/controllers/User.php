<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('view_landingpage');	
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
 ?>