<?php
require_once 'model/facultad.php';
require_once './libs/Session.php';

class facultadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new facultad();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/objects/facultad.php';   
    }
    
    public function Crud(){
        $facultad = new facultad();
        
        if(isset($_REQUEST['id'])){
            $facultad = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/objects/facultad-editar.php';
        
    }
    
    public function Guardar(){
        $facultad = new facultad();
        
        $facultad->id = $_REQUEST['id'];
        $facultad->facultad = $_REQUEST['facultad'];
        $facultad->etiqueta = $_REQUEST['etiqueta'];
        $facultad->color = $_REQUEST['color'];  

        $facultad->id > 0 
            ? $this->model->Actualizar($facultad)
            : $this->model->Registrar($facultad);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}