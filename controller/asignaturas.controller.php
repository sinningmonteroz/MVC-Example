<?php
require_once 'model/asignaturas.php';
require_once './libs/Session.php';

class asignaturasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new asignaturas();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/objects/asignaturas.php';
       
    }
    
    public function Crud(){
        $asignaturas = new asignaturas();
        
        if(isset($_REQUEST['id'])){
            $asignaturas = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/objects/asignaturas-editar.php';
        
    }
    
    public function Guardar(){
        $asignaturas = new asignatura();
        
        $asignaturas->id = $_REQUEST['id'];
        $asignaturas->nombres = $_REQUEST['nombre'];
        $asignaturas->apellidos = $_REQUEST['creditos'];
        $asignaturas->facultad = $_REQUEST['creador'];  
      

        $asignaturas->id > 0 
            ? $this->model->Actualizar($asignaturas)
            : $this->model->Registrar($asignaturas);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}