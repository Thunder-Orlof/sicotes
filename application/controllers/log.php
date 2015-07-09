<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
	}
	
	public function index(){
		$this->load->view('loginView');
	}

	public function login(){
		print 'Estas accediendo al sistema';

	}

	public function logout(){

	}

}