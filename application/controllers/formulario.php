<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class formulario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->Model("Dominios_Model");
		$this->load->library('grocery_CRUD');
	}
	
	public function _example_output($output = null)
	{
		$this->load->view('formView.php',$output);
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

		$this->load->view('formView.php',$output);

		$this->load->view("/menu/footerMEnu");

		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		//$this->load->database();

	}

	public function prueba($var)
	{
		$data["titulo"]="pruebade titulo";
		$data["formulario"]=$this->Dominios_Model->GetUsers();
	$this->load->view('inicio',$data);

	}
    public function formulario()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('formulario');

			$output = $crud->render();

			$this->index($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}