<?php
require_once 'model/programas.php';
require_once './libs/Session.php';

class programasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new programas();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/objects/programas.php';
       
    }
    
    public function Crud(){
        $programas = new programas();
        
        if(isset($_REQUEST['id'])){
            $programas = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/objects/programas-editar.php';
        
    }
    
    public function Guardar(){
        $programas = new programas();
        
        $programas->id = $_REQUEST['id'];
        $programas->nombre = $_REQUEST['nombre'];
        $programas->id_facultad = $_REQUEST['id_facultad'];
      

        $programas->id > 0 
            ? $this->model->Actualizar($programas)
            : $this->model->Registrar($programas);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}