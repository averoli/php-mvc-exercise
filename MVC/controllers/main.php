<?php

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        // echo "<p>New controller</p>";
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}
