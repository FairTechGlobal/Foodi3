<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		
	}

	public function dummy()
	{
		$this->load->view('RestaurantDash/basics/header');
		$this->load->view('RestaurantDash/basics/main_header');
		$this->load->view('RestaurantDash/basics/left_side_nav');
//		$this->load->view('content_demo');
		$this->load->view('RestaurantDash/basics/footer');
	}
}