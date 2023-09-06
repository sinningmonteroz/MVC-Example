<?php
require_once 'model/cliente.php';
require_once './libs/Session.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
       
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        
    }
    
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->id = $_REQUEST['id'];
        $cliente->nombres = $_REQUEST['nombres'];
        $cliente->apellidos = $_REQUEST['apellidos'];
        $cliente->facultad = $_REQUEST['facultad'];  
        $cliente->perfil_docente = $_REQUEST['perfil-docente']; 
        $cliente->tipo_contrato = $_REQUEST['tipo-contrato'];
        $cliente->id_cargo = $_REQUEST['id-cargo'];
        $cliente->identidad = $_REQUEST['dni'];   
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}