<?php
class usuarios_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * funciones usuario
     */
    public function agregar_usuario($datos=array())
    {
        $this->db->insert("usuarios",$datos);
        return true;
    }
    public function iniciar_sesion($nick,$password)
    {
        //hash obtiene el password del usuario
        $hash=$this->db
            ->select("password")
            ->from("usuarios")
            ->where(array("nick"=>$nick))
            ->get();
        //se verifica mediante la funcion si el password pertenece a la clave hash generada
        if (password_verify($password, $hash->row()->password)) {
            return 1;//devuelve 1 si es verdadero
        } else {
            return 0;
        }
    }
    public function getDatosUsuario($nick)
    {
        $query=$this->db
            ->select("nombre,ciudad,edad,sexo,nick,avatar_name")
            ->from("usuarios")
            ->where(array("nick"=>$nick))
            ->get();
        return $query->row();
        /*$query=$this->db->query('"'."call obtiene_datos_usuario('".$nick."')".'"');
        return $query->row();*/
    }
    public function verifica_nick($nick){
        $query=$this->db
            ->select("nick")
            ->from("usuarios")
            ->where(array("nick"=>$nick))
            ->count_all_results();
        return $query;
    }
    public function actualiza_usuario($datos=array(),$nick)
    {
        $this->db->where('nick',$nick);
        $this->db->update('usuarios',$datos);
        return true;
    }
    public function actualizaperfil($datos=array(),$nick){
        $this->db->where('nick',$nick);
        $this->db->update('usuarios',$datos);
        return true;
    }
    public function getAvatarFem(){
        /*$query=$this->db
            ->select("nombre,link")
            ->from("avatar_fem")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_avatar_femenino');
        return $query->result();
    }
    public function guardaAvatar($datos=array(),$datos2=array(),$nick)
    {
        $this->db->where('nick',$nick);
        $this->db->update('usuarios',$datos);
        $this->db->where('nick_fk',$nick);
        $this->db->update('lideres',$datos2);
        return true;

    }
    public function guardaEstadoTutorial($datos=array(),$nick){
        $this->db->where('nick_fk',$nick);
        $this->db->update('tutorial',$datos);
    }
    public function getAvatarMas(){
        /*$query=$this->db
            ->select("nombre,link")
            ->from("avatar_mas")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_avatar_masculino');
        return $query->result();
    }

    /*
     * Fin funciones de usuario
     */
    public function getFrutas(){
        /*$query=$this->db
                ->select("id,nombre,link,descripcion,categoria,saludable,beneficios,consumo")
                ->from("frutas")
                ->get();
            return $query->result();*/
        $query=$this->db->get('ver_frutas_verduras');
        return $query->result();
    }
    public function getFrutaUsuario($nick){
        $query=$this->db
            ->select("id_fruta_fk")
            ->from("fruta_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function guardaFrutaUsuario($datos=array()){
        $this->db->insert("fruta_usuario",$datos);
        return true;
    }
    public function getDeportes(){
        /*$query=$this->db
            ->select("id,nombre,link,descripcion,categoria,saludable,beneficios,frecuencia")
            ->from("deportes")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_deportes');
        return $query->result();
    }
    public function getDeporteUsuario($nick){
        $query=$this->db
            ->select("id_deporte_fk")
            ->from("deporte_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function guardaDeporteUsuario($datos=array()){
        $this->db->insert("deporte_usuario",$datos);
        return true;
    }
    public function  getDeporteId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,frecuencia")
            ->from("deportes")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function  getFrutaId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("frutas")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function  getAcGrasaId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("aceite_grasas")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function  getAlimentoId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("alimentos")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function getAlimentoUsuario($nick){
        $query=$this->db
            ->select("id_alimento_fk")
            ->from("alimento_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function  getCerealId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("cereales")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function getCerealUsuario($nick){
        $query=$this->db
            ->select("id_cereal_fk")
            ->from("cereal_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getAcGrasas(){
        /*$query=$this->db
            ->select("id,nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("aceite_grasas")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_aceite_grasas');
        return $query->result();
    }
    public function getAcGrasaUsuario($nick){
        $query=$this->db
            ->select("id_acgrasa_fk")
            ->from("aceite_grasa_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function guardaAcGrasaUsuario($datos=array()){
        $this->db->insert("aceite_grasa_usuario",$datos);
        return true;
    }
    public function getAlimentos(){
        /*$query=$this->db
            ->select("id,nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("alimentos")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_alimentos');
        return $query->result();
    }
    public function guardaAlimentoUsuario($datos=array()){
        $this->db->insert("alimento_usuario",$datos);
        return true;
    }
    public function getCereales(){
        /*$query=$this->db
            ->select("id,nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("cereales")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_cereales');
        return $query->result();
    }
    public function guardaCerealUsuario($datos=array()){
        $this->db->insert("cereal_usuario",$datos);
        return true;
    }
    public function getTips($id){
        $query=$this->db
            ->select("descripcion")
            ->from("tips")
            ->where(array("id"=>$id))
            ->get();
        return $query->row();
    }
    public function agregarTip($datos=array()){
        $this->db->insert("tips",$datos);
        return true;
    }
    public function getMaxTips(){
        return $this->db->count_all_results('tips');
    }
    public function getLideres(){
        /*$query=$this->db
            ->select("nick_fk,puntaje,sexo,avatar_name_fk")
            ->from("lideres")
            ->order_by('puntaje','DESC')
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_lideres');
        return $query->result();
    }
    /**
     * Cuestionario
     */

    public function guardaCuestRespAcgrasa($datos=array()){
        $this->db->insert("cuest_resp_acgrasa",$datos);
        return true;
    }
    public function guardaCuestRespFrut($datos=array()){
        $this->db->insert("cuest_resp_frut",$datos);
        return true;
    }
    public function guardaCuestRespDepo($datos=array()){
        $this->db->insert("cuest_resp_depor",$datos);
        return true;
    }
    public function guardaCuestRespAli($datos=array()){
        $this->db->insert("cuest_resp_ali",$datos);
        return true;
    }
    public function guardaCuestRespCer($datos=array()){
        $this->db->insert("cuest_resp_cer",$datos);
        return true;
    }
    public function guardaCuestDispDeporte($datos=array()){
        $this->db->insert("cuest_disp_depor",$datos);
        return true;
    }
    public function getCuestDispDeporte($nick){
        $query=$this->db
            ->select("cuest_id_deporte")
            ->from("cuest_disp_depor")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function deleteCuestDispDeporte($nick,$cuest){
        $this->db->where('cuest_id_deporte', $cuest);//es un AND
        $this->db->where('nick_fk', $nick);
        $this->db->delete('cuest_disp_depor');
    }
    public function getCuestResponAcgrasa($nick){
        $query=$this->db
            ->select("cuest_id_acgrasa")
            ->from("cuest_resp_acgrasa")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getCuestResponFrut($nick){
        $query=$this->db
            ->select("cuest_id_fruta")
            ->from("cuest_resp_frut")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getCuestResponAli($nick){
        $query=$this->db
            ->select("cuest_id_alimento")
            ->from("cuest_resp_ali")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getCuestResponDep($nick){
        $query=$this->db
            ->select("cuest_id_deporte")
            ->from("cuest_resp_depor")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getCuestResponCer($nick){
        $query=$this->db
            ->select("cuest_id_cereal")
            ->from("cuest_resp_cer")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    public function getCuestionariosAcGrasa(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntas_aceitegrasa")
            ->get();
        return $query->result();
    }
    public function getCuestionariosFruta(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntas_fruta")
            ->get();
        return $query->result();
    }
    public function getCuestionariosAlimento(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntas_alimento")
            ->get();
        return $query->result();
    }
    public function getCuestionariosDeporte(){
        /*$query=$this->db
            ->select("idpregunta,titulo_fk")
            ->distinct()//distintos !!
            ->from("preguntas_deporte")
            ->get();
        return $query->result();*/
        $query=$this->db
            ->select("d.idpregunta,p.titulo")
            ->distinct()//distintos !!
            ->from("preguntas_deporte as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->get();
        return $query->result();
    }
    public function getCuestionariosCereal(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntas_cereal")
            ->get();
        return $query->result();
    }
    /*Obtiene preguntas para desafio diario
    */
    public function getPreguntasFrutaDesafioDiario(){
        $query=$this->db->get('ver_preguntas_fruta_verdura');
        return $query->result();
    }
    public function getPreguntasAcGrasaDesafioDiario(){
        $query=$this->db->get('ver_preguntas_aceite_grasa');
        return $query->result();
    }
    public function getPreguntasAlimentoDesafioDiario(){
        $query=$this->db->get('ver_preguntas_alimento');
        return $query->result();
    }
    public function getPreguntasDeporteDesafioDiario(){
        $query=$this->db->get('ver_preguntas_deporte');
        return $query->result();
    }
    public function getPreguntasCerealDesafioDiario(){
        $query=$this->db->get('ver_preguntas_cereal');
        return $query->result();
    }
    public function getEstadoDesafioDiario($nick){
        $query=$this->db
            ->select("nick_fk,fecha_cuest")
            ->from("desafio_diario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function actualizaEstadoDesafioDiario($nick,$datos=array()){
        $this->db->where('nick_fk',$nick);
        $this->db->update('desafio_diario',$datos);
        return true;
    }
    public function guardaEstadoDesafioDiario($datos=array()){
        $this->db->insert("desafio_diario",$datos);
        return true;
    }
    /*
     * Fin Obtiene preguntas desafio diario
     */
    /*
     * Obtiene las preguntas del cuestionario pasado por id
     */
    public function getPreguntasFruta($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta,
            d.feedback")
            ->from("preguntas_fruta as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasAcGrasa($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta,
            d.feedback")
            ->from("preguntas_aceitegrasa as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasAlimento($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta,
            d.feedback")
            ->from("preguntas_alimento as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasDeporte($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta,
            d.feedback")
            ->from("preguntas_deporte as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasCereal($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta,
            d.feedback")
            ->from("preguntas_cereal as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    /*
     * Fin obtener preguntas del cuestionario
     */
    public function guardaPuntaje($datos=array(),$nick){

        /*$this->db->update('puntos',$datos)
            ->where(array('nick_fk'=>$nick));*/
        $this->db->where('nick_fk', $nick);
        $this->db->update('puntos', $datos);
    }
    public function guardaPuntajeLider($datos=array(),$nick){

        /*$this->db->replace('lideres', $datos)
            ->where(array('nick_fk'=>$nick));*/
        $this->db->where('nick_fk', $nick);
        $this->db->update('lideres', $datos);
    }
    public function agregarEnPuntos($datos=array()){
        $this->db->insert("puntos",$datos);
        return true;
    }
    public function agregarEnLider($datos=array()){
        $this->db->insert("lideres",$datos);
        return true;
    }
    public function getTutorialUsuario($nick){
        $query=$this->db
            ->select("cuenta,seccion_fruta,seccion_deporte,seccion_acgrasa,seccion_alimento,seccion_cuest,desafio_diario,
            seccion_cereal")
            ->from("tutorial")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function agregaTutorial($datos=array()){
        $this->db->insert("tutorial",$datos);
        return true;
    }
    public function agregaAvance($datos=array()){
        $this->db->insert("avance",$datos);
        return true;
    }
    public function agregaEstadoDiploma($datos=array()){
        $this->db->insert("estado_diploma",$datos);
        return true;
    }
    public function getPuntaje($nick){
        $query=$this->db
            ->select("puntos")
            ->from("puntos")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function getPuntajeLider($nick){
        $query=$this->db
            ->select("puntaje")
            ->from("lideres")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    /**
     * fin
     */
    /**
     * Tips frutas y verduras, deporte,
     * aceite grasas, carnes huevos legumbres, cereales
     */
    public function getTipFrutas(){
        /*$query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludable_fruta")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_tip_frutas');
        return $query->result();
    }
    public function getTipAcGrasa(){
        /*$query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludable_aceitegrasa")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_tip_aceite_grasa');
        return $query->result();
    }
    public function getTipAlimentos(){
        /*$query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludable_alimento")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_tip_alimentos');
        return $query->result();
    }
    public function getTipDeportes(){
        /*$query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludable_deporte")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_tip_deportes');
        return $query->result();
    }
    public function getTipCereales(){
        /*$query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludable_cereal")
            ->get();
        return $query->result();*/
        $query=$this->db->get('ver_tip_cereales');
        return $query->result();
    }

    /**
     * fin
     */
    /**
     * noticias
     */
    public function getNoticias(){

        /*
         * //obtiene los datos generando esta consulta a la BD
         * $query=$this->db
            ->select("id,titulo,descripcion,foto")
            ->from("noticias")
            ->get();
        return $query->result();*/

         //obtiene los datos desde la vista ver_noticias en la BD
         $query=$this->db->get('ver_noticias');
        return $query->result();

        /*
         * otra forma de obtener los datos desde la vista
         * $query=$this->db
            ->select("*")
            ->from("ver_noticias")
            ->get();
        return $query->result();*/
    }
    /**
     * fin
     */
    /**
     * Avance del usuario
     */
    public function getAvance($nick){
        $query=$this->db
            ->select("avance_fruta,avance_acgrasa,avance_alimento,avance_deporte,
                    avance_cuest_fruta,avance_cuest_acgrasa,avance_cuest_deporte,avance_cuest_alimento,
                    avance_cereal,avance_cuest_cereal")
            ->from("avance")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function getEstadoDiploma($nick){
        $query=$this->db
            ->select("valor_fruta,valor_acgrasa,valor_deporte,valor_alimento,valor_cereal")
            ->from("estado_diploma")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function actualizaAvance($datos=array(),$nick)
    {
        $this->db->where('nick_fk',$nick);
        $this->db->update('avance',$datos);
        return true;
    }
    /*
     * obtiene todas las filas distintas
     */
    public function getTotalFrutas(){
        return $this->db->count_all_results('frutas');
    }
    public function getTotalCuestFruta(){
        //return $this->db->count_all_results('preguntasfruta');
        $this->db->select('idpregunta');
        $this->db->distinct();
        $query = $this->db->get('preguntas_fruta');
        return count($query->result());
    }
    public function getTotalAcGrasa(){
        return $this->db->count_all_results('aceite_grasas');
    }
    public function getTotalCuestAcGrasa(){
        $this->db->select('idpregunta');
        $this->db->distinct();
        $query = $this->db->get('preguntas_aceitegrasa');
        return count($query->result());
    }
    public function getTotalDeportes(){
        return $this->db->count_all_results('deportes');
    }
    public function getTotalCuestDeporte(){
        $this->db->select('idpregunta');
        $this->db->distinct();
        $query = $this->db->get('preguntas_deporte');
        return count($query->result());
    }
    public function getTotalAlimentos(){
        return $this->db->count_all_results('alimentos');
    }
    public function getTotalCuestAlimento(){
        $this->db->select('idpregunta');
        $this->db->distinct();
        $query = $this->db->get('preguntas_alimento');
        return count($query->result());
    }
    public function getTotalCereales(){
        return $this->db->count_all_results('cereales');
    }
    public function getTotalCuestCereal(){
        $this->db->select('idpregunta');
        $this->db->distinct();
        $query = $this->db->get('preguntas_cereal');
        return count($query->result());
    }
    /**
     * actualiza estado de seccion completa
     */
    public function guardaSeccionCompleta($datos=array(),$nick){
        $this->db->where('nick_fk',$nick);
        $this->db->update('estado_diploma',$datos);
        return true;
    }
}