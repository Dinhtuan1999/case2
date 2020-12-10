<?php


namespace App\Model;


class CategoryModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }

    public function getAll (){
        $sql = "SELECT * FROM books JOIN categorys on books.categoryNumber = categorys.categoryNumber
                LIMIT 15";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getCategoryID($id)
    {
        $sql = "SELECT * FROM `categorys` WHERE categoryNumber = :category_Number ";
        $stmt =$this->database->prepare($sql);
        $stmt->bindParam(':category_Number', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}
