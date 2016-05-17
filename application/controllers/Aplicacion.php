<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplicacion extends CI_Controller {

	private $session_id;
	public function __construct()
	{
		parent:: __construct();
		$this->layout->setLayout('template');
		$this->session_id=$this->session->userdata('login');
		$this->layout->css(array(base_url()."public/css/micss.css"));
	}
	public function index()
	{
		$this->layout->view('inicio');
	}
	public function registro()
	{
		/*editar para registro de usuarios*/
		if($this->input->post())
		{
			if ($this->form_validation->run("aplicacion/registro")==true)//va a form_validation y obtiene las reglas
			{
				$pass=sha1($this->input->post("password",true));//encriptacion de password
				$data=array
				(
					'nombre'=>$this->input->post("nombre",true),
					'edad'=>$this->input->post("edad",true),
					'ciudad'=>$this->input->post("ciudad",true),
					'nick'=>$this->input->post("nick",true),
					'password'=>$pass

				);
				$guardar=$this->usuarios_model->agregar_usuario($data);
				if($guardar)
				{
					$this->session->set_flashdata('ControllerMessage','Registro guardado');
					redirect(base_url().'aplicacion/sesion',301);
				}
				else{
					$this->session->set_flashdata('ControllerMessage','Se ha producido un error');
					redirect(base_url().'aplicacion/registro',301);
				}
			}
		}
		$this->layout->view('registro');
	}
	public function sesion()
	{
		if($this->input->post())
		{
			$pass=sha1($this->input->post("password",true));
			$datos=$this->usuarios_model->iniciar_sesion($this->input->post('nick',true),$pass);
			if($datos==1)
			{
				$this->session->set_userdata("sesionsita");//crea una sesion de codeigniter
				$this->session->set_userdata('login',$this->input->post('nick',true));
				//$session_id=$this->session->userdata("login");
				redirect(base_url().'aplicacion/cuenta',301);

			}
			else
			{
				$this->session->set_flashdata('ControllerMessage','Usuario y/o clave invalida.');
				redirect(base_url().'aplicacion/sesion',301);
			}
		}
		$this->layout->view('sesion');
	}
	public function cuenta()
	{
		if (!empty($this->session_id)) {
			$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
			$this->layout->view('cuenta',compact("datos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}

	}
	public function cerrarsesion()
	{
		$this->session->unset_userdata(array('login'=>''));
		$this->session->sess_destroy("taller_ci");
		redirect(base_url().'aplicacion',301);
	}
	public  function  restablecepassword(){
		$this->layout->view("restablecepassword");
	}
}