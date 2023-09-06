<?php
require_once 'model/plan_estudio.php';
require_once './libs/Session.php';

class plan_estudioController{
    
    private $model;
    private $session;
    
    public function __CONSTRUCT(){
        $this->model = new plan_estudio();
        $this->session = new Session();
        $this->session->init();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/plan_estudio/plan_estudio.php';
       
    }
    
    public function Crud(){
        $plan_estudio = new plan_estudio();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/plan_estudio/plan_estudio-editar.php';
        
    }
    
    public function Guardar(){
        $plan_estudio = new plan_estudio();
        
        $plan_estudio->id = $_REQUEST['id'];
        $plan_estudio->id_asignatura = $_REQUEST['id_asignatura'];
        $plan_estudio->id_docente = $_REQUEST['id_docente'];
        $plan_estudio->jornada = $_REQUEST['jornada'];  
        $plan_estudio->programa1 = $_REQUEST['programa1']; 
        $plan_estudio->programa2 = $_REQUEST['programa2'];
        $plan_estudio->hrs_semestral = $_REQUEST['hrs_semestral'];
        $plan_estudio->creador = $_REQUEST['creador'];   
      

        $plan_estudio->id > 0 
            ? $this->model->Actualizar($plan_estudio)
            : $this->model->Registrar($plan_estudio);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}