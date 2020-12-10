<?php
namespace App\Model;

class LibraryModel {
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }

    public function getAll (){
//        var_dump(1);die;
        $sql = "SELECT * FROM books JOIN categorys on books.categoryNumber = categorys.categoryNumber
                LIMIT 15";
        $stmt = $this->database->query($sql);

        return $stmt->fetchAll();

    }

    public function getBookByID($id)
    {
        $sql = "SELECT * FROM books WHERE bookNumber =:book_Number ";
        $stmt =$this->database->prepare($sql);
        $stmt->bindParam(':book_Number', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id){
        $sql = "DELETE FROM books WHERE bookNumber =:book_Number ";
        $stmt =$this->database->prepare($sql);
        $stmt->bindParam(':book_Number', $id);
        $stmt->execute();
    }

    public function update($bookname,$author,$comment,$describe, $bookNumber){
        $sql = "UPDATE `books` SET `bookName`=:book_name ,`author` =:author, `comment` =:comment ,`describes` =:describe  WHERE `books`.`bookNumber` =:book_Number ; ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':book_name',$bookname);
        $stmt->bindParam(':author',$author);
        $stmt->bindParam(':comment',$comment);
        $stmt->bindParam(':describe',$describe);
        $stmt->bindParam(':book_Number' , $bookNumber);
        $stmt->execute();
    }

    public function addBook($bookname,$author,$comment,$describe , $categoryNumber){
        $sql = "INSERT INTO `books`( `bookName`, `author`, `comment`, `describes`, `categoryNumber`) VALUES (?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$bookname);
        $stmt->bindParam(2,$author);
        $stmt->bindParam(3,$comment);
        $stmt->bindParam(4,$describe);
        $stmt->bindParam(5,$categoryNumber);
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
