<?php


namespace App\model;


class BookModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll (){

        $sql ="SELECT * FROM cuahang";
//
        $stmt = $this->database->query($sql);
//        var_dump($stmt);die();
        return $stmt->fetchAll();
    }
    public function getBookById($id){
        $sql = "SELECT * FROM books WHERE bookNumber =:book_Number";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':book_Number' , $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($id){
        $sql = "DELETE FROM books WHERE bookNumber =:book_Number";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':book_Number' , $id);
        $stmt->execute();
    }
        public function addBook($bookname,$author,$describe ){
//        var_dump(1);die();
            $sql = "INSERT INTO `books`( `bookName`, `author`, `description`) VALUES (?,?,?)";
            $stmt = $this->database->prepare($sql);
            $stmt->bindParam(1,$bookname);
            $stmt->bindParam(2,$author);
            $stmt->bindParam(3,$describe);
            $stmt->execute();
    }
    public function update($bookname,$author,$describe, $bookNumber){
        $sql = "UPDATE `books` SET `bookName`=:book_name ,`author` =:author,`description` =:description  WHERE `books`.`bookNumber` =:book_Number ; ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':book_name',$bookname);
        $stmt->bindParam(':author',$author);
        $stmt->bindParam(':description',$describe);
        $stmt->bindParam(':book_Number' , $bookNumber);
        $stmt->execute();
    }
    public function search($search){
//        var_dump($search);die;
//        $search = $_POST['search'];
        $sql ="SELECT * FROM books WHERE bookName LIKE :bookName";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":bookName" ,'%'. $search .'%' );
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
