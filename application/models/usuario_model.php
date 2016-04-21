<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class usuario_model extends CI_Model{
	public $variable;
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
		$this->load->database();
	}
	public function login ($nombre, $password){

		/*devuelve una fila es xq existe*/

		$this->db->where('nombre',$nombre);
		$this->db->where('password',$password);
		//$this->db->where('email',$email);
		//$this->db->where('fecha',$fecha);
		$q = $this->db->get('login');
		if($q->num_rows()>0)
		{
			return true;
		}else
		{
			return false;
		}
	}
}
