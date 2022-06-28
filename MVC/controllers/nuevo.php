<?php
class Nuevo extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('nuevo/index');
    }

    function registrarAlumno()
    {
        echo "Alumno creado";
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido]);
    }
}
