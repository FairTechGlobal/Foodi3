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
	public function adduser(){
		$this->load->view('resturant/adduser');
	}
	public function addadmin(){
		$this->load->view('resturant/addadmin');
	}
	public function create(){
		$this->load->view('resturant/create');
	}
	public function update(){
		$this->load->view('resturant/update');
	}
	public function inbox(){
		$this->load->view('resturant/inbox');
	}
	public function compose(){
		$this->load->view('resturant/compose');
	}


}
