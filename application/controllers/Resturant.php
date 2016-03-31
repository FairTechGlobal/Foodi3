<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resturant extends CI_Controller {

	// this is meant to call the resturant view
	public function index()
	{
		$this->load->view('resturant/welcome');
	}

	// this is meant to call the resturant view
	public function signup()
	{
		$this->load->view('resturant/signup');
	}

	public function dashboard()
	{
		$this->load->view('resturant/dashboard');
	}
}
