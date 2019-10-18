<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function index2()
	{
		echo 'teste';
	}

	public function auth()
	{
		echo 'aqui faz autenticação';
	}

}
