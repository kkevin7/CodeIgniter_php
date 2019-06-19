<?php


class UsuariosModel extends CI_Model
{
    //Metodo que obtine todos los registros
    public function getAll(){
        return $this->db->get('usuarios')->result();
    }
}