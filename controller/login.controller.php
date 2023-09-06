<?php
require_once 'model/login.php';
require_once './libs/Session.php';

class LoginController{
    
    private $model;
    private $session;
    
    public function __CONSTRUCT(){
        $this->model = new Login();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/login/login.php';
        
    }

    public function Comprobar(){
        $cliente = new login();

        if(isset($_REQUEST['usuario'])){
            $cliente = $this->model->Comprobar($_REQUEST['usuario'], $_REQUEST['password']);
        }
       
        if(isset($cliente->id)){
            header('Location: index.php?c=cliente');
            $this->session->add('identidad', $cliente->identidad);
            $this->session->add('nombres', $cliente->nombres);
            $this->session->add('apellidos', $cliente->apellidos);
            $this->session->add('facultad', $cliente->facultad);
            $this->session->add('identidad', $cliente->identidad);
            $this->session->add('id_cargo', $cliente->id_cargo);
            $this->session->add('tipo_contrato', $cliente->tipo_contrato);
        }else{
            header('Location: index.php?c=login&m=error');
        }
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/login/usuario-editar.php';
        
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
      

        if($cliente->id > 0){
            $this->model->Actualizar($cliente);
        }
        header('Location: index.php');
    }
    public function logout(){
    $this->session->close();
    header('location: index.php?c=login');
    }
    
    
}