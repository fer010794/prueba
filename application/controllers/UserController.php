<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->Model("InicioModel");
		$this->load->library('grocery_CRUD');
		$this->load->view->('example');
		$this->load->library('session');
		}
		

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index($output = null){

		//$this->load->view('example',$output);
		$this->load->database();
		

		$data =array('titulo' =>'Borderless');
		$this->load->view("/invitado/head", $data);

		$data= array ('Gsl' => 'Gsl');
		$this->load->view("/invitado/nav",$data);

		$data = array('Gsl' => 'Blog', 'descripcion' => 'Bienvenido a borderles');
		$this->load->view("/invitado/header", $data);
		//$this->load->view("Home",$data);

		$this->load->view("/invitado/contenido");
		$this->load->view("/invitado/footer");
	}
	
  	public function prueba($var)
	{
		$data["titulo"]="pruebade titulo";
		$data["usuarios"]=$this->InicioModel->GetUsers();
	$this->load->view('inicio',$data);

	}
	public function prueba2()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('usuarios');

			$output = $crud->render();

			$this->index($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	}

