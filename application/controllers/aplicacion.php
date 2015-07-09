<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aplicacion extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('consultas_Model');
		$this->load->helper('date');
	}

	public function index(){
		$data['aplicaciones'] = $this->consultas_Model->read2('aplicacion');
		$this->load->view('aplicacion/aplicacionesView', $data);
	}

	public function agregar(){
		$this->load->view('aspirante/addAspirante_view');
	}
	 public function registrar(){
	 	$aplicacion=array(
	 		'fecha'	=>$this->input->post('fecha')
	 		);
	 	if($this->consultas_Model->add('aplicacion', $aplicacion)){
	 		redirect(base_url().'index.php/aplicacion');
	 	}else{
	 		print 'No se pudo agregar el registro, intente más tarde.';
	 	}
	 }

	public function editar(){
		print 'Estas por editar los datos del usuario';
	}

	public function actualizar(){
		print 'bu';
	}

	public function eliminar(){
		print 'Eliminar';
	}
}