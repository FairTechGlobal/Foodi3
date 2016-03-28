<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserReg extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->userregistration();
	}
	public function userregistration()
	{
		$this->load->view('UserRegistration/Basics/header');
		$this->load->view('UserRegistration/UserRegistration');
		$this->load->view('UserRegistration/Basics/footer');
	}
	public function profile()
	{
		$this->load->view('UserRegistration/Basics/header');
		$this->load->view('UserRegistration/Profile');
		$this->load->view('UserRegistration/Basics/footer');
	}
}
