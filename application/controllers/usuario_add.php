<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_add extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('usuario/add_user_view');
	}
}