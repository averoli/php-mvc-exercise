<?php

class employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('employee/index');
        // echo "<p>New controller</p>";
    }

    function registerPlayer()
    {
        $player = $_POST['player'];
        $position = $_POST['position'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $nickname = $_POST['nickname'];
        $age = $_POST['age'];
        $nationality = $_POST['nationality'];
        $contact = $_POST['contact'];
        $price = $_POST['price'];
        $team = $_POST['team'];

        $this->model->insert(
            [
                'player' => $player,
                'position' => $position,
                'name' => $name,
                'lastName' => $lastName,
                'nickname' => $nickname,
                'age' => $age,
                'nationality' => $nationality,
                'contact' => $contact,
                'price' => $price,
                'team' =>  $team
            ]
        );
    }

    // function render()
    // {
    //     $this->view->render('employee/index');
    // }

    //create function to create or edit a player 
    //create function to delete a player 
    //ex: this->model->insert(); 
}
