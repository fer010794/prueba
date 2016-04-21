<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->Model("InicioModel");
		$this->load->library('grocery_CRUD');
		$this->load->library('session');
	}
	
	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}


	public function index($output)
	{
		$data =array('titulo' =>'Borderless');
		$this->load->view("/menu/HeadMenu", $data);

		$data= array ('Gsl' => 'Gsl');
		$this->load->view("/menu/NavMenu",$data);

		$data = array('Gsl' => 'Blog', 'descripcion' => 'Bienvenido a borderles');
		$this->load->view("/menu/HeaderMenu", $data);

		$this->load->view('example.php',$output);

		$this->load->view("/menu/footerMEnu");
		

		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		//$this->load->database();

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