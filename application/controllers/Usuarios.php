<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsuariosModel');
    }

    public function index()
    {
        $datos['titulo'] = 'Controlador de Usuarios';
        //Cargando la vista
        $this->load->view('include/header');
        $this->load->view('usuarios/index', $datos);
        $this->load->view('include/footer');
    }

    //Metodo para cargar los datos
    public function recargar(){
        $data= ['usuarios'=>$this->UsuariosModel->getAll()];
        //renderizando la vista
        $this->load->view('usuarios/tabla',$data);
    }

    //Metodo para registrar
    public function ingresar(){
        //$data = [$_POST['nombre'],$_POST['apellido']];
        $datos=[
            'nombre'=> $_POST['nombre'],
            'apellido'=>$_POST['apellido']
        ];
        $this->UsuariosModel->create($datos);
    }

    //metodo delete
    public function delete($id){
        //Llamar al metood delete de mi formulario
        $this->UsuariosModel->delete($id);
    }

    public function getById($id){
        //obteniendo el registro de la db
        $data=[
            'usuario'=>$this->UsuariosModel->getById($id)
        ];
        //enviandoel registro a la base de datos
        $this->load->view('usuarios/form',$data);
    }

    //metodo update
    public function editar(){
        //$data = [$_POST['nombre'],$_POST['apellido'],$_POST['id']];
        $datos=[
            'nombre'=> $_POST['nombre'],
            'apellido'=>$_POST['apellido'],
            'id_Usuario'=>$_POST['id']
        ];
        $this->UsuariosModel->update($datos);
    }

}
