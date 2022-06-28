<?php

class Errores extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->mensaje = "La página no existe.";
  }

  function render()
  {
    $this->view->render('error/index');
  }
}
