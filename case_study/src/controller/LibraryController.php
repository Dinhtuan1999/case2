<?php

namespace App\Controller;

use App\Model\LibraryModel;

class LibraryController
{
    protected $libraryModel;

    public function __construct()
    {
        $this->libraryModel = new LibraryModel();
    }

    public function index()
    {
        $librarys = $this->libraryModel->getAll();
        include "src/view/list.php";
    }

    public function deleter($id)
    {
        if ($_REQUEST['id']) {
            $this->libraryModel->delete($id);
        }
        header('location:index.php?page=list-library');
    }

    public function getBookByID($id)
    {
        return $this->libraryModel->getBookByID($id);
    }

    public function update($id)

    {
        if (!empty($_POST['name'])
            && !empty($_POST['author'])
            && !empty($_FILES['img'])
            && !empty($_POST['describes']))
        {
            $bookname = $_POST['name'];
            $author = $_POST['author'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $describe = $_POST['describes'];
            $this->libraryModel->update($bookname, $author, $img, $describe, $id);
            header('location:index.php?page=list-library');
        } else {
            $BookDetail = $this->getBookByID($id);
            include "src/view/update.php";

        }

    }

    public function add()
    {
        if (!empty($_POST['name'])
            && !empty($_POST['author'])
            && !empty($_FILES['img'])
            && !empty($_POST['describes'])
        ) {
            $bookname = $_POST['name'];
            $author = $_POST['author'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $describe = $_POST['describes'];
            $categoryNumber = $_POST['categoryNumber'];
            $this->libraryModel->addBook($bookname, $author, $img, $describe, $categoryNumber);
            header('location:index.php?page=list-library');
        } else {
            include "src/view/add.php";
        }
    }

    public function search()
    {
        $search = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_REQUEST['search'];
//            var_dump($search);die;
        }
        $librarys = $this->libraryModel->search($search);
//        var_dump($librarys);die;
        include "src/view/list.php";
    }
}
