<?php


class UsuariosModel extends CI_Model
{
    //Metodo que obtine todos los registros
    public function getAll(){
        return $this->db->get('usuarios')->result();
    }

    //post
    public function create($datos){
        //$sql = "INSERT INTO usuarios(nombre,apellido) VALUES (?,?)";
        //$this->db->query($sql,$datos);
        $this->db->insert('usuarios',$datos);
    }

    //metodo delete
    public  function delete($id){
        //$this->db->query("DELETE FROM usuarios WHERE id_Usuario=$id");
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuarios');
    }

    public function getById($id){
        //return $this->db->query("SELECT * FROM usuarios WHERE id_Usuario=$id")->row();
        $this->db->where('id_Usuario',$id);
        return $this->db->get('usuarios')->row();
    }

    public function update($datos){
        //$sql = "UPDATE usuarios SET nombre=?, apellido=? WHERE id_Usuario=?";
        //$this->db->query($sql,$data);
        $this->db->where('id_Usuario',$datos['id_Usuario']);
        array_pop($datos);
        $this->db->update('usuarios',$datos);
    }

}