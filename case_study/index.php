<?php
use App\Controller\LibraryController;
//use App\Controller\CategoryController;
$loader = require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$libraryController = new LibraryController();
//var_dump($libraryController);die;
//$categoryController = new CategoryController();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<a href="index.php?page=list-library">Danh sach sach</a>-->
<?php
switch ($page) {

    case 'delete':
        $id = $_REQUEST['id'];
        $libraryController->deleter($id);
        break;
    case 'update':
        $id =$_REQUEST['id'];
        $libraryController->update($id);
        break;
    case 'add':
        $libraryController->add();
        break;
    case 'search':
//        var_dump($_REQUEST);die;
        $search = isset($_REQUEST['search']) ? $_REQUEST['search'] : "";
        $libraryController->search($search);
        break;
//    case 'searchcategory':
    case 'list-library':
        $libraryController->index();
//        var_dump($libraryController);die;
        break;

    default :
        include "login.php";
}
?>

</body>
</html>
