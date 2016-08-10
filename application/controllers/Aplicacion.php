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
		$this->layout->js(array(base_url()."public/js/bootstrap-filestyle.min.js"));//borrar a futuro
		$this->layout->js(array(base_url()."public/js/miJS.js"));
	}
	public function index()
	{
		$this->layout->view('inicio');
	}
	public function registro()
	{
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
					'password'=>$pass,
					'avatar_name'=>""

				);
				$nick=$this->input->post("nick",true);
				$consulta=$this->usuarios_model->verifica_nick($nick);
				if($consulta){
					$this->session->set_flashdata('ErrorNick','Nick ya existe,ingrese uno distinto');
					//redirect(base_url().'aplicacion/registro',301);
					//$this->layout->view('registro');//guarda los datos de registro
				}
				else{
					//agrega el usuario
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
					//
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
		if ($this->input->post()) {
			//proceso la imagen
			$error = null;
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			//valido la foto
			$config['upload_path'] = './public/images/user_avatar';
			$config['allowed_types'] = 'jpg';
			$config['overwrite'] = true;
			$config['encrypt_name'] = false;
			$config['file_name'] = $datos->nick;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('archivo')) {
				$datos->avatar_name = $datos->nick;
				//actualizar dato
				$this->usuarios_model->actualiza_usuario($datos, $this->session_id);
				redirect(base_url() . 'aplicacion/cuenta', 301);
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('ControllerMessage', $error["error"]);
			}
		}
			if (!empty($this->session_id)) {
				$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
				$num_tip=rand(1,10);//numero aleatorio de tips
				$tip=$this->usuarios_model->getTips($num_tip);
				$this->layout->view('cuenta', compact("datos","tip"));
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
	public function edufisica(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$this->layout->view('edu-fisica', compact("datos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function frutas(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$frutas=$this->usuarios_model->getFrutas();
			$this->layout->view('frutas', compact("datos","frutas"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function verduras(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$verduras=$this->usuarios_model->getVerduras();
			$this->layout->view('verduras', compact("datos","verduras"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function alimentos(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$alimentos=$this->usuarios_model->getAlimentos();
			$this->layout->view('alimentos', compact("datos","alimentos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function mis_recetas(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$this->layout->view('mis_recetas', compact("datos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
}
	/**
	 * Inicio Funciones AJAX para iconos
	 * */
	public function respuesta_ajax_fruta(){
		$this->layout->setLayout('template_ajax');
		$id=$this->input->post("valor1",true);
		$dataAjax=$this->usuarios_model->getFrutaId($id);
		$this->layout->view("respuesta_ajax_fruta",compact("dataAjax"));
	}
	public function respuesta_ajax_verdura(){
		$this->layout->setLayout('template_ajax');
		$id=$this->input->post("valor1",true);
		$dataAjax=$this->usuarios_model->getVerduraId($id);
		$this->layout->view("respuesta_ajax_verdura",compact("dataAjax"));
	}
	public function respuesta_ajax_alimento(){
		$this->layout->setLayout('template_ajax');
		$id=$this->input->post("valor1",true);
		$dataAjax=$this->usuarios_model->getAlimentoId($id);
		$this->layout->view("respuesta_ajax_alimento",compact("dataAjax"));
	}
	/**
	 * Termino funciones AJAX para iconos
	 */
	/**
	 * Galeria
	 */
	public function galeria(){
		if ($this->input->post()) {
			//proceso la imagen
			$error = null;
			//$nombrefoto=$this->input->post("titulo",true);
			//$nombrefotoFormateado=str_replace(" ","_",$nombrefoto);
			//valido la foto
			$config['upload_path'] = './public/images/galeria';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = false;
			$config['encrypt_name'] = true;
			//$config['file_name'] = $nombrefotoFormateado;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('archivo')) {
				$ima = $this->upload->data();
				$file_name = $ima["file_name"];
				//guardar en base de datos
				$foto=array
				(
					'descripcion'=>$this->input->post("descripcion",true),
					'dueño'=>$this->session_id,
					'link'=>"public/images/galeria/".$file_name

				);
				$this->usuarios_model->agregarFoto($foto);
				redirect(base_url() . 'aplicacion/galeria', 301);
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('ControllerMessage', $error["error"]);
			}
		}
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$fotos=$this->usuarios_model->getFotos();
			$this->layout->view("galeria",compact("datos","fotos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	/**
	 * Fin Galeria
	 */
	/**
	 * Funciones AJAX para cuestionarios
	 */
	public function cuestionarioFruta(){
		$this->layout->setLayout('template_ajax');
		$id=$this->input->post("valor1",true);
		$preguntasFruta=$this->usuarios_model->getPreguntasFruta($id);
		$respuestasFruta=$this->usuarios_model->getRespuestasFruta($id);
		$this->layout->view("cuestionarioFruta",compact("preguntasFruta","respuestasFruta"));
	}

	/**
	 * Fin Funciones AJAX cuestionarios
	 */
}