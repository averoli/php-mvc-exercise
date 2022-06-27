<?php
class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verify($datos)
    {

        try {
            $query = $this->db->connect()->query('SELECT * FROM users;');
            $user = $query->fetch();
            
            $dbuser = $user["users_email"];
            $dbpassword =  $user["users_password"];
            if($datos['email'] == $dbuser && password_verify($datos['password'], $dbpassword)){
                return true;
            } else {
                return false;
            }
            $query->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
}

// WHERE users_email = "' . $datos['email'] . '" AND users_password = "' . $datos['password'] . '"
