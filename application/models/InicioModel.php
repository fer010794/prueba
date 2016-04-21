<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InicioModel extends CI_Model {
  function __construct(){
    parent::__construct();

  }
  /*funcion para traer la tabla de usuasçrios*/
  function GetUsers(){
    $query = $this->db->get('usuarios');

return $query->result();
  }
}
//fin de la clase InicioModel
