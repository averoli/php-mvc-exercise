<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verify($datos)
    {
        // $query = $this->db->connect()->prepare('SELECT * FROM users');
        try {
            $password = password_hash($datos['password'], PASSWORD_DEFAULT);
            $query = $this->db->connect()->prepare('SELECT * FROM users WHERE email = "' . $datos['email'] . '"');
             
            $query->execute();
            echo $query->queryString;
            print_r ($query->fetchAll());
        } catch (PDOException $e) {
            echo $e;
        }
    }
}

// $2y$10$0wQ3RIuTXDZy4xoku6kEgeydIf/FwbmMTxQqU/OjEsyHFuI0RVRUS 


