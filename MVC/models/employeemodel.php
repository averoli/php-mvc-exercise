<?php

class EmployeeModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        //insert into db
        echo "Insert info";
        try {
            $query = $this->db->connect()->prepare('INSERT INTO employee (player, position, name, lastName, nickname, age, nationality, contact, price, team) VALUES (:player, :position, :name, :lastName, :nickname, :age, :nationality, :contact, :price, :team)');
            if ($query->execute([
                ['player'] => $data['player'],
                ['position'] => $data['position'],
                ['name'] => $data['name'],
                ['lastName'] => $data['lastName'],
                ['nickname'] => $data['nickname'],
                ['age'] => $data['age'],
                ['nationality'] => $data['nationality'],
                ['contact'] => $data['contact'],
                ['price'] => $data['price'],
                ['team'] => $data['team']
            ])) {
                echo 'insert data';
            } else {
                echo 'Error';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            //throw $th;
        }
    }
}
