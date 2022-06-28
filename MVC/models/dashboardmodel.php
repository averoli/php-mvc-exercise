<?php
include_once 'models/employee.php';
class DashboardModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM employee');
            while ($row = $query->fetch()) {
                $item = new Employee();
                $item->id = $row['id'];
                $item->name = $row['name'];
                $item->lastName = $row['lastName'];
                $item->player = $row['player'];
                $item->position = $row['position'];
                $item->age = $row['age'];
                $item->nationality = $row['nationality'];

                array_push($items, $item);
            };
            
        } catch (PDOException $e) {
            echo $e;
        }
        return $items;
    }
}
