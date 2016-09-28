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
		$this->layout->js(array(base_url()."public/js/bootbox.js"));
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
					'avatar_name'=>"user"

				);
				$jugador=array(
					'nick_fk'=>$this->input->post("nick",true),
					'puntos'=>0
				);//al comenzar tiene 0 puntos
				$lider=array(
					'nick_fk'=>$this->input->post("nick",true),
					'puntaje'=>0,
					'avatar_name'=>"user"
				);
				$UserTempCuest=array(
					'nick_fk'=>$this->input->post("nick",true),
					'cuesttemp'=>"cuestionario"
				);
				$UserTempReceta=array(
					'nick_fk'=>$this->input->post("nick",true),
					'receta'=>"receta"
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
					//agrega jugador con 0 puntos
					if($guardar)
					{
						$this->session->set_flashdata('ControllerMessage','Registro guardado');
						$this->usuarios_model->agregarEnPuntos($jugador);//agrega usuario en tabla puntos para guardar su puntaje
						$this->usuarios_model->agregarEnLider($lider);//agrega puntaje en tabla lideres
						$this->usuarios_model->agregaUserCuestTemp($UserTempCuest);//agrega cuestionario temporal
						$this->usuarios_model->agregaUserRecetaTemp($UserTempReceta);
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
			$user=$this->input->post("nick",true);
			if($user=="admin"){
				$pass = sha1($this->input->post("password", true));
				$datos = $this->usuarios_model->iniciar_sesion($this->input->post('nick', true), $pass);
				if ($datos == 1) {
					$this->session->set_userdata("sesionsita");//crea una sesion de codeigniter
					$this->session->set_userdata('login', $this->input->post('nick', true));
					//$session_id=$this->session->userdata("login");
					redirect(base_url() . 'aplicacion/cuentaAdmin', 301);

				} else {
					$this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave invalida.');
					redirect(base_url() . 'aplicacion/sesion', 301);
				}
			}
			else {
				$pass = sha1($this->input->post("password", true));
				$datos = $this->usuarios_model->iniciar_sesion($this->input->post('nick', true), $pass);
				if ($datos == 1) {
					$this->session->set_userdata("sesionsita");//crea una sesion de codeigniter
					$this->session->set_userdata('login', $this->input->post('nick', true));
					//$session_id=$this->session->userdata("login");
					redirect(base_url() . 'aplicacion/cuenta', 301);

				} else {
					$this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave invalida.');
					redirect(base_url() . 'aplicacion/sesion', 301);
				}
			}
		}
		$this->layout->view('sesion');
	}
	public function cuenta()
	{
			if (!empty($this->session_id)) {
				$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
				$maximo=$this->usuarios_model->getMaxTips();
				$num_tip=rand(1,$maximo);//numero aleatorio de tips
				$tip=$this->usuarios_model->getTips($num_tip);
				$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
				$this->layout->view('cuenta', compact("datos","tip","puntaje"));
			} else {
				redirect(base_url() . 'aplicacion', 301);
			}
	}
	/*
	 * Perfil usuario
	 */
	public function modificaPerfil(){
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
				redirect(base_url() . 'aplicacion/modificaperfil', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('ControllerMessage', $error["error"]);
			}
		}
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$this->layout->view('modificaperfil', compact("datos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function actualizaperfil(){
		$this->layout->setLayout('template_ajax');
		$nombre=$this->input->post("valor1",true);
		$edad=$this->input->post("valor2",true);
		$ciudad=$this->input->post("valor3",true);
		//$nick=$this->input->post("valor4",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$aGuardar=array(
			'nombre'=>$nombre,
			'edad'=>$edad,
			'ciudad'=>$ciudad
			//'nick'=>$nick,
		);
		$this->usuarios_model->actualizaperfil($aGuardar,$datos->nick);
		$this->layout->view("actualizaperfil");
	}
	/*
	 * Fin
	 */
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
			$cuestionarios=$this->usuarios_model->getCuestionariosFruta();
			$cuestRespondidos=$this->usuarios_model->getCuestResponFrut($datos->nick);
			$this->layout->view('frutas', compact("datos","frutas","cuestionarios","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function verduras(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$verduras=$this->usuarios_model->getVerduras();
			$cuestionarios=$this->usuarios_model->getCuestionariosVerdura();
			$cuestRespondidos=$this->usuarios_model->getCuestResponVerd($datos->nick);
			$this->layout->view('verduras', compact("datos","verduras","cuestionarios","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function alimentos(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$alimentos=$this->usuarios_model->getAlimentos();
			$cuestionarios=$this->usuarios_model->getCuestionariosAlimento();
			$cuestRespondidos=$this->usuarios_model->getCuestResponAli($datos->nick);
			$this->layout->view('alimentos', compact("datos","alimentos","cuestionarios","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}

	/**
	 * Recetas
	 */
	public function tureceta(){

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$receta=$this->usuarios_model->getRecetaTemp($datos->nick);
			$recetafull=$this->usuarios_model->getRecetaFull($receta->receta);
			$this->layout->view("tureceta",compact("datos","recetafull"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaRecetaTemp(){
		$recetaId=$this->input->post("valor",true);
		$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
		$aGuardar=array(
			'receta'=>$recetaId
		);
		//guarda en bd el cuest temporal;
		$this->usuarios_model->guardaRecetaTemp($aGuardar,$datos->nick);

	}
	public function receta(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$recetas=$this->usuarios_model->getRecetas();
			$recetasUsuario=$this->usuarios_model->getRecetaUsuario($datos->nick);
			$this->layout->view('receta', compact("datos","puntaje","recetas","recetasUsuario"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaRecetaUsuario(){
		$idreceta=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_receta_fk'=>$idreceta
		);
		$this->usuarios_model->guardaRecetaUsuario($aGuardar);
	}

	/**
	 * Fin Recetas
	 */
	public function lideres(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$lideres=$this->usuarios_model->getLideres();
			$this->layout->view('lideres', compact("datos","lideres"));
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
			//if ($this->form_validation->run("aplicacion/galeria"))//va a form_validation y obtiene las reglas
			{
				//proceso la imagen
				$error = null;
				//$nombrefoto=$this->input->post("titulo",true);
				//$nombrefotoFormateado=str_replace(" ","_",$nombrefoto);
				//valido la foto
				$config['upload_path'] = './public/images/galeria';
				$config['allowed_types'] = 'jpg|png';
				$config['overwrite'] = false;
				$config['encrypt_name'] = true;
				//$config['file_name'] = $nombrefotoFormateado;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('archivo')) {
					$ima = $this->upload->data();
					$file_name = $ima["file_name"];
					//guardar en base de datos
					$foto = array
					(
						'descripcion' => $this->input->post("descripcion", true),
						'dueño' => $this->session_id,
						'link' => "public/images/galeria/" . $file_name

					);
					$this->usuarios_model->agregarFoto($foto);
					redirect(base_url() . 'aplicacion/galeria', 'refresh');
				} else {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('ControllerMessage', $error["error"]);
				}
			}
		}
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$fotos = $this->usuarios_model->getFotos();
			$this->layout->view("galeria", compact("datos", "fotos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	/**
	 * Fin Galeria
	 */


	/*
	 * Cuestionario por url
	 */
	public function guardaCuestTemp(){
		$cuestionarioId=$this->input->post("valor",true);
		$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
		$aGuardar=array(
			'cuesttemp'=>$cuestionarioId
		);
		//guarda en bd el cuest temporal;
		$this->usuarios_model->guardaCuestTemp($aGuardar,$datos->nick);

	}
	public function cuestionarioVerd(){

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			//$identificador=$this->uri->segment(3);
			//$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			$cuestionario=$this->usuarios_model->getCuestTemp($datos->nick);
			$preguntasVerdura=$this->usuarios_model->getPreguntasVerdura($cuestionario->cuesttemp);
			$cuestRespondidos=$this->usuarios_model->getCuestResponVerd($datos->nick);
			$this->layout->view("cuestionarioVerd",compact("datos","identificador","preguntasVerdura","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioFrut(){

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			//$identificador=$this->uri->segment(3);
			//$cuestionario="cuestionario".$identificador;//cuestionario3, que esta en BD con id
			$cuestionario=$this->usuarios_model->getCuestTemp($datos->nick);
			$preguntasFruta=$this->usuarios_model->getPreguntasFruta($cuestionario->cuesttemp);
			$cuestRespondidos=$this->usuarios_model->getCuestResponFrut($datos->nick);
			$this->layout->view("cuestionarioFrut",compact("datos","identificador","preguntasFruta","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioAli(){

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			//$identificador=$this->uri->segment(3);
			//$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			$cuestionario=$this->usuarios_model->getCuestTemp($datos->nick);
			$preguntasAlimento=$this->usuarios_model->getPreguntasAlimento($cuestionario->cuesttemp);
			$cuestRespondidos=$this->usuarios_model->getCuestResponAli($datos->nick);
			$this->layout->view("cuestionarioAli",compact("datos","identificador","preguntasAlimento","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaCuest(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_verdura'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespVerd($aGuardar);
	}
	public function guardaCuestFrut(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_fruta'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespFrut($aGuardar);
	}
	public function guardaCuestAli(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_alimento'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespAli($aGuardar);
	}
	public function guardaPuntaje(){
		$puntos=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'puntos'=>$puntos
		);
		$this->usuarios_model->guardaPuntaje($aGuardar,$nick);
	}
	public function guardaPuntajeLider(){
		$puntaje=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'puntaje'=>$puntaje
		);
		$this->usuarios_model->guardaPuntajeLider($aGuardar,$nick);
	}
	/*
	 * Fin Cuestionario por url
	 */

	/**
	 * Cuenta Administrador
	 */
	public function cuentaAdmin(){
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			if($datos->nick=="admin"){
				$this->layout->view('cuentaAdmin', compact("datos"));
			}
			else{
				redirect(base_url() . 'aplicacion/cuenta', 301);
			}
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function nuevotip(){
			if($this->input->post()) {
				if ($this->form_validation->run("aplicacion/nuevotip") == true)//va a form_validation y obtiene las reglas
				{
					$tip = array
					(
						'descripcion' => $this->input->post("descripcion", true)
					);
					$this->usuarios_model->agregarTip($tip);
					$this->session->set_flashdata('ControllerMessage','Tip guardado');
					redirect(base_url() . 'aplicacion/nuevotip', 301);
				}
			}
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
					if ($datos->nick == "admin") {
						$this->layout->view('nuevotip', compact("datos"));
					} else {
						redirect(base_url() . 'aplicacion/cuenta', 301);
					}
				}
			else {
					redirect(base_url() . 'aplicacion', 301);
				}
	}

	public function nuevocuestioanrio(){

	}
	/**
	 * Fin Cuenta Administrador
	 */
}