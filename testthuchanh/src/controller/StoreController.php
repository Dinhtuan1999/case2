<?php
namespace App\controller;

use App\model\BookModel;

class BookController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
//        var_dump(1);die;
        $books = $this->bookModel->getAll();
//       var_dump($this->bookModel->getAll());die;
        include "src/view/list.php";
    }

    public function delete($id){
        if($_REQUEST['id']){
            $this->bookModel->delete($id);
        }
        header('location:index.php?page=list-book');
    }
    public function getBookById($id){
        return $this->bookModel->getBookById($id);
    }
    public function add(){
//        var_dump(1);die();
        if(!empty($_POST['name']) && !empty($_POST['author']) &&
        !empty($_POST['description'])){
            $bookname =$_POST['name'];
            $author = $_POST['author'];
            $describe = $_POST['description'];
            $this->bookModel->addBook($bookname, $author ,$describe);
            header('location:index.php?page=list-book');
        }
        else {
            include "src/view/add.php";
        }
    }
    public function update($id)

    {
        if (!empty($_POST['name'])
            && !empty($_POST['author'])
            && !empty($_POST['description']))
        {
            $bookname = $_POST['name'];
            $author = $_POST['author'];
            $describe = $_POST['description'];
            $this->bookModel->update($bookname, $author, $describe, $id);
            header('location:index.php?page=list-book');
        } else {
            $BookDetail = $this->getBookByID($id);
            include "src/view/update.php";

        }

    }

    public function search()
    {
        $search = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_REQUEST['search'];
//            var_dump($search);die;
        }
        $books = $this->bookModel->search($search);
//        var_dump($librarys);die;
        include "src/view/list.php";
    }
}
