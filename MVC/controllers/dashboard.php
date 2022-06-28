<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->employee = [];
    }

    function render()
    {
        $employes = $this->model->get();
        $this->view->employee = $employes;
        $this->view->render('dashboard/index');

    }

    function loadingUsers()
    {
        
    }
}
