<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplicacion extends CI_Controller {

	private $session_id;
	private $cuest_id;
	public function __construct()
	{
		parent:: __construct();
		$this->layout->setLayout('template');
		$this->session_id=$this->session->userdata('login');
		//$this->cuest_id=$this->session->userdata('cuestionario');//variable de sesion
		$this->layout->css(array(base_url()."public/css/animate.css"));
		$this->layout->js(array(base_url()."public/js/bootstrap-filestyle.min.js"));//borrar a futuro
		$this->layout->js(array(base_url()."public/js/bootbox.js"));
	}
	public function index()
	{
		$this->layout->css(array(base_url()."public/css/css_inicio.css"));
		$this->layout->view('inicio');
	}
	public function registro()
	{
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if($this->input->post())
		{
			if ($this->form_validation->run("aplicacion/registro")==true)//va a form_validation y obtiene las reglas
			{
				$pass=password_hash($this->input->post("password",true), PASSWORD_DEFAULT);//encriptacion de password
				$data=array
				(
					'nombre'=>$this->input->post("nombre",true),
					'edad'=>$this->input->post("edad",true),
					'sexo'=>$this->input->post("sexo",true),
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
					'sexo'=>$this->input->post("sexo",true),
					'avatar_name_fk'=>"user"
				);
				$tutorial=array(
					'nick_fk'=>$this->input->post("nick",true),
					'cuenta'=>'1',
					'seccion_fruta'=>'1',
					'seccion_acgrasa'=>'1',
					'seccion_deporte'=>'1',
					'seccion_alimento'=>'1',
					'seccion_cuest'=>'1',
					'desafio_diario'=>'1',
					'seccion_cereal'=>'1'
				);
				$avance=array(
					'nick_fk'=>$this->input->post("nick",true),
					'avance_fruta'=>'0',
					'avance_acgrasa'=>'0',
					'avance_deporte'=>'0',
					'avance_alimento'=>'0',
					'avance_cuest_alimento'=>'0',
					'avance_cuest_deporte'=>'0',
					'avance_cuest_fruta'=>'0',
					'avance_cuest_acgrasa'=>'0',
					'avance_cuest_cereal'=>'0',
					'avance_cereal'=>'0'
				);
				$estado_diploma=array(
					'nick_fk'=>$this->input->post("nick",true),
					'valor_fruta'=>'0',
					'valor_acgrasa'=>'0',
					'valor_deporte'=>'0',
					'valor_alimento'=>'0',
					'valor_cereal'=>'0'
				);
				$desafio_diario=array(
					'nick_fk'=>$this->input->post("nick",true),
					'fecha_cuest'=>"2012-12-12"
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
						//$this->usuarios_model->agregaUserCuestTemp($UserTempCuest);//agrega cuestionario temporal
						//$this->usuarios_model->agregaUserRecetaTemp($UserTempReceta);
						$this->usuarios_model->agregaTutorial($tutorial);
						$this->usuarios_model->agregaAvance($avance);
						$this->usuarios_model->agregaEstadoDiploma($estado_diploma);
						$this->usuarios_model->guardaEstadoDesafioDiario($desafio_diario);
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
		$this->layout->css(array(base_url()."public/css/css_general.css"));
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
				$pass=$this->input->post("password",true);
				$datos = $this->usuarios_model->iniciar_sesion($this->input->post('nick', true), $pass);
				if ($datos == 1) {
					$this->session->set_userdata("sesionsita");//crea una sesion de codeigniter
					$this->session->set_userdata('login', $this->input->post('nick', true));
					//$this->session->set_userdata('cuestionario','cuest');
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
	public function acercade(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		$this->layout->view("acercade");
	}
	public function contacto(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		$this->layout->view("contacto");
	}
	public function desafioDiario(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$desafioDatos=$this->usuarios_model->getEstadoDesafioDiario($this->session_id);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$preguntasFruta=$this->usuarios_model->getPreguntasFrutaDesafioDiario();
			$preguntasAcGrasa=$this->usuarios_model->getPreguntasAcGrasaDesafioDiario();
			$preguntasDeporte=$this->usuarios_model->getPreguntasDeporteDesafioDiario();
			$preguntasAlimento=$this->usuarios_model->getPreguntasAlimentoDesafioDiario();
			$preguntasCereal=$this->usuarios_model->getPreguntasCerealDesafioDiario();
			$preguntasDesafio=array();
			$fecha_actual=date("Y-m-d");
			$largoPregFruta=count($preguntasFruta);
			$largoPregAcGrasa=count($preguntasAcGrasa);
			$largoPregDeporte=count($preguntasDeporte);
			$largoPregAlimento=count($preguntasAlimento);
			$largoPregCereal=count($preguntasCereal);
			/*
			 * random de 1 a largo de array para cada array
			 * */
			$x=0;
			$w=0;
			$y=0;
			$z=0;
			$c=0;
			$valoresf=array();//valores frutas verduras
			$valoresag=array();//valores aceites y grasas
			$valoresd=array();//valores deporte
			$valoresa=array();//valores alimentos
			$valoresc=array();//valores cereales
			while ($x<2) {//numero de preguntas que obtendra, aqui 2
				$num_aleatorio = rand(0,$largoPregFruta-1);
				if (!in_array($num_aleatorio,$valoresf)) {
					array_push($valoresf,$num_aleatorio);
					array_push($preguntasDesafio,$preguntasFruta[$num_aleatorio]);
					$x++;
				}
			}
			while ($y<2) {//numero de preguntas que obtendra, aqui 2
				$num_aleatorio = rand(0,$largoPregAcGrasa-1);
				if (!in_array($num_aleatorio,$valoresag)) {
					array_push($valoresag,$num_aleatorio);
					array_push($preguntasDesafio,$preguntasAcGrasa[$num_aleatorio]);
					$y++;
				}
			}
			while ($z<2) {//numero de preguntas que obtendra, aqui 2
				$num_aleatorio = rand(0,$largoPregDeporte-1);
				if (!in_array($num_aleatorio,$valoresd)) {
					array_push($valoresd,$num_aleatorio);
					array_push($preguntasDesafio,$preguntasDeporte[$num_aleatorio]);
					$z++;
				}
			}
			while ($w<2) {//numero de preguntas que obtendra, aqui 2
				$num_aleatorio = rand(0,$largoPregAlimento-1);
				if (!in_array($num_aleatorio,$valoresa)) {
					array_push($valoresa,$num_aleatorio);
					array_push($preguntasDesafio,$preguntasAlimento[$num_aleatorio]);
					$w++;
				}
			}
			while ($c<2) {//numero de preguntas que obtendra, aqui 2
				$num_aleatorio = rand(0,$largoPregCereal-1);
				if (!in_array($num_aleatorio,$valoresc)) {
					array_push($valoresc,$num_aleatorio);
					array_push($preguntasDesafio,$preguntasCereal[$num_aleatorio]);
					$c++;
				}
			}
			/*
			 * poner preguntas en preguntasDesafio
			 */
			$this->layout->view("desafiodiario",compact("datos","preguntasDesafio",
				"fecha_actual","puntaje","puntajeLider","preguntasFruta","preguntasDeporte","preguntasAlimento",
				"preguntasAcGrasa","preguntasCereal","desafioDatos","tutorial"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaFechaDesafioDiario(){
		$fecha=$this->input->post("valor",true);
		$aGuardar=array(
			'fecha_cuest'=>$fecha
		);
		$this->usuarios_model->actualizaEstadoDesafioDiario($this->session_id,$aGuardar);
	}
	public function guardaSeccionCompleta(){
		$tipo=$this->input->post("valor",true);
		switch($tipo){
			case "fruta":
				$aGuardar=array(
					'valor_fruta'=>1
				);
				$this->usuarios_model->guardaSeccionCompleta($aGuardar,$this->session_id);
				break;
			case "acgrasa":
				$aGuardar=array(
					'valor_acgrasa'=>1
				);
				$this->usuarios_model->guardaSeccionCompleta($aGuardar,$this->session_id);
				break;
			case "deporte":
				$aGuardar=array(
					'valor_deporte'=>1
				);
				$this->usuarios_model->guardaSeccionCompleta($aGuardar,$this->session_id);
				break;
			case "alimento":
				$aGuardar=array(
					'valor_alimento'=>1
				);
				$this->usuarios_model->guardaSeccionCompleta($aGuardar,$this->session_id);
				break;
			case "cereal":
				$aGuardar=array(
					'valor_cereal'=>1
				);
				$this->usuarios_model->guardaSeccionCompleta($aGuardar,$this->session_id);
				break;
		}

	}
	public function diploma(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$this->load->library('fpdf_gen');
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$estadoDiploma=$this->usuarios_model->getEstadoDiploma($datos->nick);
			if($estadoDiploma->valor_fruta==1 and $estadoDiploma->valor_acgrasa==1
				and $estadoDiploma->valor_alimento==1 and $estadoDiploma->valor_deporte==1
			and $estadoDiploma->valor_cereal==1){
				/*
             * Crea el pdf para el usuario
             */
				$this->fpdf->SetFont('Arial','I',32);
				$this->fpdf->Image('public/images/diplomaV2.jpg',0,0,297,0);
				$this->fpdf->setY(105);
				$ancho=$this->fpdf->GetPageWidth();
				$this->fpdf->setX(($ancho-20)/2);
				$nombre=$datos->nombre;
				//$this->fpdf->Write(5,"Monica Carrasco Santibañez");
				$this->fpdf->Cell(20,10,$nombre,0,0,'C');
				echo $this->fpdf->Output('Diploma_'.$nombre.'.pdf','D');
				/*
                 * Fin crea pdf usuario
                 */
			}else{
				/*
             * Crea el pdf example para el usuario
             */
				$this->fpdf->SetFont('Arial','I',32);
				$this->fpdf->Image('public/images/diplomaExample.jpg',0,0,297,0);
				$this->fpdf->setY(105);
				$ancho=$this->fpdf->GetPageWidth();
				$this->fpdf->setX(($ancho-20)/2);
				$nombre=$datos->nombre;
				//$this->fpdf->Write(5,"Monica Carrasco Santibañez");
				$this->fpdf->Cell(20,10,$nombre,0,0,'C');
				echo $this->fpdf->Output('Diploma_'.$nombre.'.pdf','D');
				/*
                 * Fin crea pdf usuario
                 */
			}
			;
			//$this->layout->view('diploma', compact("datos","estadoDiploma"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuenta()
	{
		$this->layout->css(array(base_url()."public/css/css_general.css"));
			if (!empty($this->session_id)) {
				$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
				$maximo=$this->usuarios_model->getMaxTips();
				$num_tip=rand(1,$maximo);//numero aleatorio de tips
				$tip=$this->usuarios_model->getTips($num_tip);
				$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
				$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
				$avance=$this->usuarios_model->getAvance($datos->nick);
				$totalFrutas=$this->usuarios_model->getTotalFrutas();
				$totalCuestFruta=$this->usuarios_model->getTotalCuestFruta();
				$totalAcGrasa=$this->usuarios_model->getTotalAcGrasa();
				$totalCuestAcGrasa=$this->usuarios_model->getTotalCuestAcGrasa();
				$totalDeportes=$this->usuarios_model->getTotalDeportes();
				$totalCuestDeporte=$this->usuarios_model->getTotalCuestDeporte();
				$totalAlimentos=$this->usuarios_model->getTotalAlimentos();
				$totalCuestAlimento=$this->usuarios_model->getTotalCuestAlimento();
				$totalCereales=$this->usuarios_model->getTotalCereales();
				$totalCuestCereal=$this->usuarios_model->getTotalCuestCereal();
				/*
				 * Totales
				 */
				$totalFruta=round((($avance->avance_fruta+$avance->avance_cuest_fruta)*100)/($totalFrutas+$totalCuestFruta));
				$totalCereal=round((($avance->avance_cereal+$avance->avance_cuest_cereal)*100)/($totalCereales+$totalCuestCereal));
				$totalAcGrasa=round((($avance->avance_acgrasa+$avance->avance_cuest_acgrasa)*100)/($totalAcGrasa+$totalCuestAcGrasa));
				$totalAlimento=round((($avance->avance_alimento+$avance->avance_cuest_alimento)*100)/($totalAlimentos+$totalCuestAlimento));
				$totalDeporte=round((($avance->avance_deporte+$avance->avance_cuest_deporte)*100)/($totalDeportes+$totalCuestDeporte));
				/*
				 * obtener estado_diploma
				 */
				$estadoDiploma=$this->usuarios_model->getEstadoDiploma($datos->nick);
				$this->layout->view('cuenta', compact("datos","tip","puntaje","tutorial","avance",
					"totalFruta","totalAcGrasa","totalDeporte", "totalAlimento","estadoDiploma","totalCereal"));
			} else {
				redirect(base_url() . 'aplicacion', 301);
			}
		/*
		 * he Profiler Class will display benchmark results, queries you have run,
		 *  and $_POST data at the bottom of your pages.
		 * This information can be useful during development in order to help with debugging and optimization.
		 * $this->output->enable_profiler(TRUE);*/
	}
	public function certificado(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$estadoDiploma=$this->usuarios_model->getEstadoDiploma($datos->nick);
			$this->layout->view('certificado', compact("datos","puntaje","estadoDiploma"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	/*
	 * Perfil usuario
	 */
	public function modificaPerfil(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$avatar_fem=$this->usuarios_model->getAvatarFem();
			$avatar_mas=$this->usuarios_model->getAvatarMas();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$this->layout->view('modificaperfil', compact("datos","avatar_fem","avatar_mas","puntaje"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaAvatar(){
		$avatar=$this->input->post("valor",true);
		$aGuardar=array(
			'avatar_name'=>$avatar
		);
		$aGuardar2=array(
			'avatar_name_fk'=>$avatar
		);
		$this->usuarios_model->guardaAvatar($aGuardar,$aGuardar2,$this->session_id);
	}
	public function guardaEstadoTutorial(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'cuenta'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialDesafioDiario(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'desafio_diario'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialFruta(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'seccion_fruta'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialAcGrasa(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'seccion_acgrasa'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialDeporte(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'seccion_deporte'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialAlimento(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'seccion_alimento'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function guardaEstadoTutorialCereal(){
		$estado=$this->input->post("valor",true);
		$aGuardar=array(
			'seccion_cereal'=>$estado
		);
		$this->usuarios_model->guardaEstadoTutorial($aGuardar,$this->session_id);
	}
	public function actualizaperfil(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
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
	public function actualizaAvance(){
		$this->layout->setLayout('template_ajax');
		$dato=$this->input->post("valor1",true);
		$tipo=$this->input->post("valor2",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		if($tipo=="fruta"){
			$aGuardar=array(
				'avance_fruta'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="acgrasa"){
			$aGuardar=array(
				'avance_acgrasa'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="deporte"){
			$aGuardar=array(
				'avance_deporte'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="alimento"){
			$aGuardar=array(
				'avance_alimento'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cereal"){
			$aGuardar=array(
				'avance_cereal'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cuestFruta"){
			$aGuardar=array(
				'avance_cuest_fruta'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cuestAcGrasa"){
			$aGuardar=array(
				'avance_cuest_acgrasa'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cuestAlimento"){
			$aGuardar=array(
				'avance_cuest_alimento'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cuestDeporte"){
			$aGuardar=array(
				'avance_cuest_deporte'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
		if($tipo=="cuestCereal"){
			$aGuardar=array(
				'avance_cuest_cereal'=>$dato,
			);
			$this->usuarios_model->actualizaAvance($aGuardar,$datos->nick);
		}
	}
	/*
	 * Fin
	 */
	public function cerrarsesion()
	{
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		$this->session->unset_userdata(array('login'=>''));
		$this->session->sess_destroy("sesionsita");
		redirect(base_url().'aplicacion',301);
	}
	public  function  restablecepassword(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		$this->layout->view("restablecepassword");
	}
	public function noticias(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$noticias=$this->usuarios_model->getNoticias();
			//$supertip=$this->usuarios_model->getSuperTip();
			$this->layout->view('noticias', compact("datos","noticias"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function deporte(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$deportes=$this->usuarios_model->getDeportes();
			$misdeportes=$this->usuarios_model->getDeporteUsuario($datos->nick);
			$cuestionarios=$this->usuarios_model->getCuestionariosDeporte();
			$cuestRespondidos=$this->usuarios_model->getCuestResponDep($datos->nick);
			$cuestionarioDisp=$this->usuarios_model->getCuestDispDeporte($datos->nick);
			$tipsDeportes=$this->usuarios_model->getTipDeportes();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$this->layout->view('deporte', compact("datos","tutorial","deportes","cuestionarios","cuestRespondidos"
				,"tipsDeportes","puntaje","misdeportes","avance","cuestionarioDisp"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaDeporteUsuario(){
		$iddeporte=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_deporte_fk'=>$iddeporte
		);
		$this->usuarios_model->guardaDeporteUsuario($aGuardar);
	}
	public function frutasverduras(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			/*si es masculino o femenino*/
			$frutas=$this->usuarios_model->getFrutas();
			$misfrutas=$this->usuarios_model->getFrutaUsuario($datos->nick);
			$cuestionarios=$this->usuarios_model->getCuestionariosFruta();
			$cuestRespondidos=$this->usuarios_model->getCuestResponFrut($datos->nick);
			$tipsFrutas=$this->usuarios_model->getTipFrutas();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$this->layout->view('frutasverduras', compact("datos","tutorial","frutas","cuestionarios","cuestRespondidos",
				"tipsFrutas","misfrutas","puntaje","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaFrutaUsuario(){
		$idfruta=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_fruta_fk'=>$idfruta
		);
		$this->usuarios_model->guardaFrutaUsuario($aGuardar);
	}
	public function aceiteGrasas(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$acGrasas=$this->usuarios_model->getAcGrasas();
			$misAcGrasas=$this->usuarios_model->getAcGrasaUsuario($datos->nick);
			$cuestionarios=$this->usuarios_model->getCuestionariosAcGrasa();
			$cuestRespondidos=$this->usuarios_model->getCuestResponAcGrasa($datos->nick);
			$tipsAcGrasas=$this->usuarios_model->getTipAcGrasa();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$this->layout->view('aceitegrasas', compact("datos","tutorial","acGrasas","cuestionarios","cuestRespondidos"
				,"tipsAcGrasas","misAcGrasas","puntaje","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaAcGrasaUsuario(){
		$idAcGrasa=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_acgrasa_fk'=>$idAcGrasa
		);
		$this->usuarios_model->guardaAcGrasaUsuario($aGuardar);
	}
	public function alimentos(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$alimentos=$this->usuarios_model->getAlimentos();
			$misalimentos=$this->usuarios_model->getAlimentoUsuario($datos->nick);
			$cuestionarios=$this->usuarios_model->getCuestionariosAlimento();
			$cuestRespondidos=$this->usuarios_model->getCuestResponAli($datos->nick);
			$tipsAlimentos=$this->usuarios_model->getTipAlimentos();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$this->layout->view('alimentos', compact("datos","tutorial","alimentos","cuestionarios","cuestRespondidos"
				,"tipsAlimentos","misalimentos","puntaje","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaAlimentoUsuario(){
		$idalimento=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_alimento_fk'=>$idalimento
		);
		$this->usuarios_model->guardaAlimentoUsuario($aGuardar);
	}
	public function cereales(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$cereales=$this->usuarios_model->getCereales();
			$miscereales=$this->usuarios_model->getCerealUsuario($datos->nick);
			$cuestionarios=$this->usuarios_model->getCuestionariosCereal();
			$cuestRespondidos=$this->usuarios_model->getCuestResponCer($datos->nick);
			$tipsCereales=$this->usuarios_model->getTipCereales();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$tutorial=$this->usuarios_model->getTutorialUsuario($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$this->layout->view('cereales', compact("datos","tutorial","cereales","cuestionarios","cuestRespondidos"
				,"tipsCereales","miscereales","puntaje","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaCerealUsuario(){
		$idcereal=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'id_cereal_fk'=>$idcereal
		);
		$this->usuarios_model->guardaCerealUsuario($aGuardar);
	}

	public function lideres(){
		$this->layout->css(array(base_url()."public/css/css_general.css"));
		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$lideres=$this->usuarios_model->getLideres();
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$this->layout->view('lideres', compact("datos","lideres","puntaje"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	/*
	 * Cuestionario por url
	 */
	/*public function guardaCuestTemp(){
		$cuestionarioId=$this->input->post("valor",true);
		$this->session->set_userdata('cuestionario',$cuestionarioId);
		$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
		$aGuardar=array(
			'cuesttemp'=>$cuestionarioId
		);
		//guarda en bd el cuest temporal;
		$this->usuarios_model->guardaCuestTemp($aGuardar,$datos->nick);

	}*/
	public function cuestionarioAcGrasa($id){
		$this->layout->css(array(base_url()."public/css/css_general.css"));

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$identificador=$this->uri->segment(3);
			$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			//$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			//$cuestionario=$this->cuest_id;//cuestionario de la variable de session asociado al usuario
			$preguntasAcGrasa=$this->usuarios_model->getPreguntasAcGrasa($cuestionario);
			$cuestRespondidos=$this->usuarios_model->getCuestResponAcGrasa($datos->nick);
			$this->layout->view("cuestionarioAcgrasa",compact("datos","identificador","preguntasAcGrasa","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioFrutaVerdura($id){
		$this->layout->css(array(base_url()."public/css/css_general.css"));

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$identificador=$this->uri->segment(3);
			$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			//Aqui obtengo valor de la variable global
			//$cuestionario=$this->usuarios_model->getCuestTemp($datos->nick);
			//$cuestionario=$this->cuest_id;//cuestionario de la variable de session asociado al usuario
			$preguntasFruta=$this->usuarios_model->getPreguntasFruta($cuestionario);
			$cuestRespondidos=$this->usuarios_model->getCuestResponFrut($datos->nick);
			$this->layout->view("cuestionarioFrutaVerdura",compact("datos","identificador","preguntasFruta","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioDep($id){
		$this->layout->css(array(base_url()."public/css/css_general.css"));

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			$cuestionario=$this->uri->segment(3);
			$preguntasDeporte=$this->usuarios_model->getPreguntasDeporte($cuestionario);
			$cuestRespondidos=$this->usuarios_model->getCuestResponDep($datos->nick);
			$cuestionarioDisp=$this->usuarios_model->getCuestDispDeporte($datos->nick);
			$this->layout->view("cuestionarioDep",compact("datos","identificador","preguntasDeporte","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos","avance","cuestionarioDisp"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioAli($id){
		$this->layout->css(array(base_url()."public/css/css_general.css"));

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			//$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			//$cuestionario=$this->cuest_id;//cuestionario de la variable de session asociado al usuario
			$identificador=$this->uri->segment(3);
			$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			$preguntasAlimento=$this->usuarios_model->getPreguntasAlimento($cuestionario);
			$cuestRespondidos=$this->usuarios_model->getCuestResponAli($datos->nick);
			$this->layout->view("cuestionarioAli",compact("datos","identificador","preguntasAlimento","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function cuestionarioCer($id){
		$this->layout->css(array(base_url()."public/css/css_general.css"));

		if (!empty($this->session_id)) {
			$datos = $this->usuarios_model->getDatosUsuario($this->session_id);
			$puntaje=$this->usuarios_model->getPuntaje($datos->nick);
			$puntajeLider=$this->usuarios_model->getPuntajeLider($datos->nick);
			$avance=$this->usuarios_model->getAvance($datos->nick);
			//$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			//$cuestionario=$this->cuest_id;//cuestionario de la variable de session asociado al usuario
			$identificador=$this->uri->segment(3);
			$cuestionario="cuestionario".$identificador;//ej:cuestionario3, que esta en BD con id
			$preguntasCereal=$this->usuarios_model->getPreguntasCereal($cuestionario);
			$cuestRespondidos=$this->usuarios_model->getCuestResponCer($datos->nick);
			$this->layout->view("cuestionarioCer",compact("datos","identificador","preguntasCereal","cuestionario",
				"puntaje","puntajeLider","cuestRespondidos","avance"));
		} else {
			redirect(base_url() . 'aplicacion', 301);
		}
	}
	public function guardaCuestDispDeporte(){
		$cuestionarioId=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_deporte'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestDispDeporte($aGuardar);
	}
	public function eliminaCuestDispDeporte(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$this->usuarios_model->deleteCuestDispDeporte($nick,$cuestionarioId);
	}
	public function guardaCuestAcGrasa(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_acgrasa'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespAcGrasa($aGuardar);
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
	public function guardaCuestDep(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_deporte'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespDepo($aGuardar);
	}
	public function guardaCuestCer(){
		$cuestionarioId=$this->input->post("valor1",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$aGuardar=array(
			'nick_fk'=>$nick,
			'cuest_id_cereal'=>$cuestionarioId
		);
		$this->usuarios_model->guardaCuestRespCer($aGuardar);
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
	/*Borra Cuestionarios disponibles*/
	public function borraCuestDispDeporte(){
		$cuestionarioId=$this->input->post("valor",true);
		$datos=$this->usuarios_model->getDatosUsuario($this->session_id);
		$nick=$datos->nick;
		$this->usuarios_model->deleteCuestDispDeporte($nick,$cuestionarioId);
	}
	/*
	 * Fin Cuestionario por url
	 */
}