<?php 
class Nuevo extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render('nuevo/index');
    }

    function registrarAlumno (){
        echo "Alumno creado";
        $this->model->insert();
    }
}