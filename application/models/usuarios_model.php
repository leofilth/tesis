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
    public function getFrutas(){
        $query=$this->db
            ->select("nombre,link,descripcion,categoria,saludable,beneficios,consumo")
            ->from("frutas")
            ->get();
        return $query->result();
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
            ->select("nombre,link,descripcion")
            ->from("verduras")
            ->get();
        return $query->result();
    }
    public function getAlimentos(){
        $query=$this->db
            ->select("nombre,link,descripcion")
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

}