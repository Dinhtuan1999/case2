<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['dollar'])) {
        $vnd = $_POST['dollar'] * 23000;
        echo $_POST['dollar'] . " Dollar = " . $vnd/1000 ."k Vietnamdong" ;
    } else {
        echo "Bạn chưa nhập.";
    }

}

?>


<html>
<header>
    <title>[*Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</header>

<body>
<br>
<h1>Ứng dụng chuyển đổi tiền tệ</h1>
<br>
<form method="POST">
    <input type="number" name="dollar" placeholder="Dollar">
    <input type="submit" id="submit" value="Convert">
</form>


</body>


</html>
