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
            ->select("nombre,ciudad,edad,nick")
            ->from("usuarios")
            ->where(array("nick"=>$nick))
            ->get();
        return $query->row();
    }

}