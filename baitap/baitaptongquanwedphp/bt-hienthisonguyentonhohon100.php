<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['soluongsont'])) {
        $soluongsont = $_POST['soluongsont'];
        countSoNT($soluongsont);
    } else {
        echo "Bạn chưa nhập.";
    }

}

function countSoNT($number)
{
    $count = 0;
    $i = 1;
    echo "Danh sach cac so nguyen to: " ;
    while ($i > 0) {
        if (soNT($i)) {
            echo $i . " ";
            $count++;
            if ($count == $number) {
                break;
            }
        }
        $i++;
    }
}


function soNT($num)
{
    if ($num < 2) return false;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

?>


<html>
<header>
    <title>[**Bài tập] Hiển thị số lượng tùy ý số nguyên tố đầu tiên
    </title>
    <style>

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
<br>
<h1>Hiển thị số lượng tùy ý số nguyên tố đầu tiên
</h1>
<br>
<form method="post">
    Nhap so luong so nguyen to <input type="number" name="soluongsont">
    <input type="submit" id="submit" value="submit">


</form>


</body>


</html>
