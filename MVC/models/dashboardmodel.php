<?php

class DashboardModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsers()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM employee');
            while($row = $query->fetch()){
                $item = new Employee();
                $item->id = $row['id'];
                $item->name = $row['name'];
                $item->lastName = $row['lastName'];
                $item->player = $row['player'];
                $item->position = $row['position'];
                $item->age = $row['age'];

                array_push($items, $item);
            };
            var_dump($row);
        } catch (PDOException $e) {
            echo $e;
        }
        return $items;
    }
}
