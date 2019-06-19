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
        $this->load->view('usuarios/index', $datos);
    }

    //Metodo para cargar los datos
    public function recargar(){
        $data= ['usuarios'=>$this->UsuariosModel->getAll()];
        //renderizando la vista
        $this->load->view('usuarios/tabla',$data);
    }
}
