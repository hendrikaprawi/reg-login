<?php

namespace App\Controllers;

class Auth extends BaseController
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('form_validation');
	// }

	public function index()
	{
		$data['title'] = "User Login";
		echo view('templates/auth_header', $data);
		echo view('auth/login');
		echo view('templates/auth_footer');
	}

	public function registration()
	{
		$data['title'] = "User Registration";
		echo view('templates/auth_header', $data);
		echo view('auth/registration');
		echo view('templates/auth_footer');
	}
}
