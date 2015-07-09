<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Joins_Model extends CI_model{
	public function __construct(){
		parent::__construct();
	}

	public function unirTablas(){
		$this->db->select('*')->from('aspirante');
		$this->db->join('escuela', 'escuela.idEscuela=aspirante.procedencia', 'inner')->join('licenciatura', 'licenciatura.idLicenciatura=aspirante.carrera', 'inner');
		return $this->db->get();
	}
}