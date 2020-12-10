<?php

use App\Controller\BillController;
$loader = require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$billController = new BillController();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="index.php?page=list-bill">Danh sach hoa don</a>
<?php
switch ($page) {
    case 'list-bill':
        $billController->index();
        break;
    case 'show-bill':
        $id = $_REQUEST['id'];
        $billController->show($id);
        break;
}

?>
</body>
</html>