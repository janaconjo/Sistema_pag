<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

//abre a pagina inicial c
	public function login()
	{
		$this->load->view('login');
	}
}