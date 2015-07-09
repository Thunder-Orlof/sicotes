<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('consultas_Model');
	}

	public function index(){
		/*esta función es la primera que se ejecuta, extrae los registros de la
		  tabla que se especifica y los manda a traves de la variable $data
		  a una vista*/
		$data['usuarios'] = $this->consultas_Model->read('usuario');
		$this->load->view('usuario/usuariosView', $data);
	}

	public function agregar(){
		//solo carga la vista de registro de un nuevo usuario
		$this->load->view('usuario/add_user_view');
	}

	public function registrar(){
		/*recoge los datos enviadosa de la vista, los almacena en la variable
		  $data, luego llama a la funcion add de consultas_Model, este emvia
		  dos parametros que son: el nombre de la tabla a la que se dirigen
		  los datos, y la variable con los datos almacenados en forma temporal*/
		$usuario=array(
			'nombres'=>$this->input->post('nombres'),
			'apellidos'=>$this->input->post('apellidos'),
			'cveUsuario'=>$this->input->post('cveUsuario'),
			'passwd'=>$this->input->post('passwd')
			);
		if($this->consultas_Model->add('usuario',$usuario)){
			redirect(base_url()."index.php/usuario");
		}else{
			print "No se pudo agregar el registro, intente más tarde.";
		}
	}

	public function editar(){
		/*esta funcion obtiene el id del elemento que se editara, almacenandolo
		  en la variable $idUsuario*/
		$idUsuario = $this->input->get("idusuario");
		$usuario = $this->consultas_Model->getById("usuario", array("idusuario"=>$idUsuario));
		$data["datosUsuario"] = $usuario->row_array();
		$this->load->view("usuario/edit_user_view", $data);
	}

	public function actualizar(){
		/*
		  actualiza los datos de un usuario, almacena de forma temporal en la 
		  variable $data la información que se modifico en la vista,
		*/
		$datosEditados=array(
			'nombres'=>$this->input->post('nombres'),
			'apellidos'=>$this->input->post('apellidos'),
			'cveUsuario'=>$this->input->post('cveUsuario'),
			'passwd'=>$this->input->post('passwd')
			);
		$arrayIdEditar = array('idusuario' => $this->input->post('idUsuario'));
		$this->consultas_Model->actualizarRegistro('usuario', $datosEditados, $arrayIdEditar);
		redirect(base_url()."index.php/usuario");
	}

	public function eliminar($id=NULL){
		/*
		  elimina el registro de un usuario*/
		
	}
}