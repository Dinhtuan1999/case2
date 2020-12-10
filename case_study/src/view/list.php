<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style >
        body {
            background-image: url("img/anhcase.jpg");
        }
        th , td {
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-library">Mượn Sách <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=add">Thêm Sách</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loại Sách
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ngôn Tình</a>
                    <a class="dropdown-item" href="#">Tâm Lý - Kỹ Năng Sống</a>
                    <a class="dropdown-item" href="#">Phiêu lưu, tưởng tượng, thần bí</a>
                    <a class="dropdown-item" href="#">kinh tế-quản lý</a>
                    <a class="dropdown-item" href="#">Ngôn Tình, Đô Thi</a>
            </li>

        </ul>
        <form  action="index.php?page=search" class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--<div>-->
<!--    <a href="index.php?page=add">add</a>-->
<!--</div>-->
<!--<div>-->
<!--    <form method="post" action="index.php?page=search">-->
<!--        <input type="text" placeholder="search" name="search" id="myInput"/>-->
<!--        <button type="submit">timkiem</button>-->
<!--    </form>-->
<!--</div>-->

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">IMG</th>
            <th scope="col">Describes</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($librarys as $key => $library): ?>

            <tr>
                <td><?php echo ++$key ?></td>
                <!--        <td>-->
                <!--            <a href="index.php?page=show-library&id=--><?php //echo $library['book_Name'] ?><!--"-->
                <!--            --><?php //echo $library['book_Name'] ?>
                <!--        </td>-->
                <td> <?php echo $library['bookName'] ?> </td>
                <td> <?php echo $library['author'] ?> </td>
                <td style="width: 100px">
                    <img src="img/<?php echo $library['comment'] ?>" style="width: 100px" >
                </td>
                <td> <?php echo $library['describes'] ?> </td>
                <td> <a href="index.php?page=delete&id=<?php echo $library['bookNumber']?>">
                        <button type="button" class="btn btn-outline-light" onclick="return confirm('Are you sure you want to delete this item')">Delete</button>
                    </a> </td>
                <td>
                    <div>
                        <a href="index.php?page=update&id=<?php echo $library['bookNumber'] ?>">
                            <button type="button" class="btn btn-outline-light">Update</button>
                        </a>

                </td>

            </tr>
        <?php endforeach; ?>
    </table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>


