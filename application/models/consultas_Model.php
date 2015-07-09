<?php defined('BASEPATH') OR exit('No direct script access allowed');
class consultas_Model extends CI_model{
	public function __construct(){
		parent::__construct();
	}

	public function add($table, $data){//Método para agregar nuevos usuarios; recibe datos desde el controlador y los recoge en las variables
		return $this->db->insert($table, $data);
	}

	public function erase($id, $table){//Mëtodo para eliminar un usuario
		$this->db->where();
		$this->db->delete($table);
	}

	public function read($table){//Método que extrae todos los registros de una tbala de la DB
		$this->db->select('*')->from($table);
		return $this->db->get();
	}

	public function read2($table){
		$this->db->select('*')->from($table);
		return $this->db->get();
	}

	public function getById($tabla, $id ){
		$this->db->select('*')->from($tabla)->where($id);
		return $this->db->get();
	}

	public function actualizarRegistro($tabla, $arrayData, $arrayId){
		$this->db->where($arrayId);
		return $this->db->update($tabla, $arrayData);
	}

}