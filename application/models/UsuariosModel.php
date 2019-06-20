<?php


class UsuariosModel extends CI_Model
{
    //Metodo que obtine todos los registros
    public function getAll(){
        return $this->db->get('usuarios')->result();
    }

    //post
    public function ingresar($datos){
        $sql = "INSERT INTO usuarios(nombre,apellido) VALUES (?,?)";
        $this->db->query($sql,$datos);
    }
}