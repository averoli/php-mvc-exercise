<?php 

class Database 
    {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;
        private $error;
    
        public function __construct()
        {
            $this->host = HOST;
            $this->db = DB;
            $this->user = USER;
            $this->password = PASSWORD;
            $this->charset = CHARSET;
        }

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";"
            . "dbname=" . $this->db . ";"
            . "user=" . $this->user . ";"
            . "password=" . $this->password . ";"
            . "charset=" . $this->charset;

        $options = [
            PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => FALSE,
        ];

        $pdo = new PDO($connection, $this->user, $this->password, $options);

        return $pdo;  
        } catch (PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}