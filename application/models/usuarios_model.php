<?php
class usuarios_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function agregar_usuario($datos=array())
    {
        $this->db->insert("usuarios",$datos);
        return true;
    }
    public function iniciar_sesion($nick,$password)
    {
        $query=$this->db
            ->select("id,nick,password")
            ->from("usuarios")
            ->where(array("nick"=>$nick,"password"=>$password))
            ->count_all_results();
        return $query;
    }
    public function getDatosUsuario($nick)
    {
        $query=$this->db
            ->select("nombre,ciudad,edad,nick,avatar_name")
            ->from("usuarios")
            ->where(array("nick"=>$nick))
            ->get();
        return $query->row();
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
    public function getFrutas(){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("frutas")
            ->get();
        return $query->result();
    }
    public function getDeportes(){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,frecuencia")
            ->from("deportes")
            ->get();
        return $query->result();
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
    public function  getVerduraId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("verduras")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function  getAlimentoId($id){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("food")
            ->where(array("nombre"=>$id))
            ->get();
        return $query->row();
    }
    public function getVerduras(){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("verduras")
            ->get();
        return $query->result();
    }
    public function getAlimentos(){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("food")
            ->get();
        return $query->result();
    }
    public function getTips($id){
        $query=$this->db
            ->select("descripcion")
            ->from("tips")
            ->where(array("id"=>$id))
            ->get();
        return $query->row();
    }
    public function agregarFoto($datos=array())
    {
        $this->db->insert("upload",$datos);
        return true;
    }
    public function getFotos(){
        $query=$this->db
            ->select("id,link,descripcion,dueño")
            ->from("upload")
            ->order_by('id','DESC')
            ->get();
        return $query->result();
    }
    public function agregarTip($datos=array()){
        $this->db->insert("tips",$datos);
        return true;
    }
    public function getMaxTips(){
        return $this->db->count_all_results('tips');
    }
    public function getLideres(){
        $query=$this->db
            ->select("nick_fk,puntaje,avatar_name")
            ->from("lideres")
            ->order_by('puntaje','DESC')
            ->get();
        return $query->result();
    }
    /**
     * Cuestionario
     */
    public function agregaUserCuestTemp($datos=array()){
        $this->db->insert("cuesttemp",$datos);
        return true;
    }
    public function guardaCuestTemp($datos=array(),$nick){
        $this->db->where('nick_fk',$nick);
        $this->db->update('cuesttemp',$datos);
        return true;
    }
    public function getCuestTemp($nick){
        $query=$this->db
            ->select("cuesttemp")
            ->from("cuesttemp")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function guardaCuestRespVerd($datos=array()){
        $this->db->insert("cuest_resp_verd",$datos);
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
    public function getCuestResponVerd($nick){
        $query=$this->db
            ->select("cuest_id_verdura")
            ->from("cuest_resp_verd")
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
    public function getCuestionariosVerdura(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntasverdura")
            ->get();
        return $query->result();
    }
    public function getCuestionariosFruta(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntasfruta")
            ->get();
        return $query->result();
    }
    public function getCuestionariosAlimento(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntasalimento")
            ->get();
        return $query->result();
    }
    public function getCuestionariosDeporte(){
        $query=$this->db
            ->select("idpregunta")
            ->from("preguntasdeporte")
            ->get();
        return $query->result();
    }
    public function getPreguntasFruta($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta")
            ->from("preguntasfruta as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasVerdura($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta")
            ->from("preguntasverdura as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasAlimento($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta")
            ->from("preguntasalimento as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
    public function getPreguntasDeporte($id){
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_pregunta,d.idpregunta,d.pregunta,d.respuesta1,d.respuesta2,d.respuesta3,d.respcorrecta")
            ->from("preguntasdeporte as d")
            ->join("preguntas as p","p.id=d.idpregunta","inner")
            ->where(array('d.idpregunta' => $id))
            ->get();
        return $query->result();
    }
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
     * Recetas
     */
    public function agregaUserRecetaTemp($datos=array()){
        $this->db->insert("recetatemp",$datos);
        return true;
    }
    public function guardaRecetaTemp($datos=array(),$nick){
        $this->db->where('nick_fk',$nick);
        $this->db->update('recetatemp',$datos);
        return true;
    }
    public function getRecetaTemp($nick){
        $query=$this->db
            ->select("receta")
            ->from("recetatemp")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->row();
    }
    public function getRecetaFull($id){
        $query=$this->db
            ->select("titulo,descripcion,ingredientes,preparacion,foto")
            ->from("recetas")
            ->where(array("id"=>$id))
            ->get();
        return $query->row();
    }
    public function getRecetas(){
        $query=$this->db
            ->select("id,titulo,descripcion,foto")
            ->from("recetas")
            ->get();
        return $query->result();
    }
    public function guardaRecetaUsuario($datos=array()){
        $this->db->insert("receta_usuario",$datos);
        return true;
    }
    public function getRecetaUsuario($nick){
        $query=$this->db
            ->select("id_receta_fk")
            ->from("receta_usuario")
            ->where(array("nick_fk"=>$nick))
            ->get();
        return $query->result();
    }
    /**
     * Fin Recetas
     */
    /**
     * Tips frutas verduras alimentos deporte
     */
    public function getTipFrutas(){
        $query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludablefruta")
            ->get();
        return $query->result();
    }
    public function getTipVerduras(){
        $query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludableverdura")
            ->get();
        return $query->result();
    }
    public function getTipAlimentos(){
        $query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludablealimento")
            ->get();
        return $query->result();
    }
    public function getTipDeportes(){
        $query=$this->db
            ->select("id,nombre,descripcion")
            ->from("tipsaludabledeporte")
            ->get();
        return $query->result();
    }

    /**
     * fin
     */
}