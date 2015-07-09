<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aspirante extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('consultas_Model');
		$this->load->model('joins_Model');
	}

	public function index(){
		$data['aspirantes'] = $this->joins_Model->unirTablas();
		$this->load->view('aspirante/aspirantesView', $data);
	}

	public function agregar(){
		$data['escuelas'] = $this->consultas_Model->read('escuela');
		$data['carreras'] = $this->consultas_Model->read('licenciatura');
		$this->load->view('aspirante/add_aspirante_view', $data);
	}
	 public function registrar(){
	 	$aspirante = array(
	 		'matricula'=>$this->input->post('matricula'),
	 		'nombres'=>$this->input->post('nombres'),
	 		'apellido1'=>$this->input->post('apellido1'),
	 		'apellido2'=>$this->input->post('apellido2'),
	 		'sexo'=>$this->input->post('sexo'),
	 		'telefono'=>$this->input->post('telefono'),
	 		'correo'=>$this->input->post('correo'),
	 		'procedencia'=>$this->input->post('procedencia'),
	 		'carrera'=>$this->input->post('carrera'),
	 		'sistema'=>$this->input->post('sistema')
	 		);
	 	if($this->consultas_Model->add('aspirante',$aspirante)){
	 		redirect(base_url()."index.php/aspirante");
	 	}else{
	 		print "No se pudo agregar el registro, intente más tarde";
	 	}
	 }

	public function editar(){
		$idAspirante = $this->input->get('idaspirante');
		$aspirante = $this->consultas_Model->getById('aspirante', array('idaspirante'=>$idAspirante));
		$data['escuelas'] = $this->consultas_Model->read('escuela');
		$data['carreras'] = $this->consultas_Model->read('licenciatura');
		$data['datosAspirante'] = $aspirante->row_array();
		$this->load->view('aspirante/edit_aspirante_view', $data);
	}

	public function actualizar(){
		$datosEditados=array(
			'matricula'=>$this->input->post('matricula'),
			'nombres'=>$this->input->post('nombres'),
			'apellido1'=>$this->input->post('apellido1'),
			'apellido2'=>$this->input->post('apellido2'),
			'sexo'=>$this->input->post('sexo'),
			'telefono'=>$this->input->post('telefono'),
			'correo'=>$this->input->post('correo'),
			'procedencia'=>$this->input->post('procedencia'),
			'carrera'=>$this->input->post('carrera'),
			'sistema'=>$this->input->post('sistema')
			);
		$arrayIdEditar = array('idaspirante' => $this->input->post('idAspirante'));
		$this->consultas_Model->actualizarRegistro('aspirante', $datosEditados, $arrayIdEditar);
		redirect(base_url().'index.php/aspirante');
	}

	public function eliminar(){
		print 'Eliminar';
	}
}