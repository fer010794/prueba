<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('usuario_model');
	}
//index al inicio se muestra el form de login
	public function index(){

		$data =array('titulo' =>'Borderless');
		$this->load->view("/invitado/head", $data);

		$data= array ('Gsl' => 'Gsl');
		$this->load->view("/invitado/nav",$data);

		$data = array('Gsl' => 'Blog', 'descripcion' => 'Bienvenido a borderles');
		$this->load->view("/invitado/header", $data);

			$this->load->view("/login/login_View");
			//verificamos que el pòst no venga vacio 
			if(isset($_POST) && $_POST != NULL){
				$user=$this->usuario_model->login($_POST['nombre'], $_POST['password']);
				if($user){
					$this->session->set_userdata('name',$_POST['nombre']);
					redirect(base_url('index.php/InUsuario/'));
				}else{
					$data['error']="Verifica tus datos";
					$this->load->view("/login/login_View",$data);
				}
				//si viene sin datos mostramos el formulario
			}else{

			//si no viene vacio comp`robamos los datpos en la base de datos
			//$_POST['nombre']	
				//$_POST['password']	
		
			$this->load->view("/menu/footerMEnu");
			}
			
			  
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Home');
	}
}