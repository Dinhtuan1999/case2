
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['FirstOperand']) && isset($_POST['SecondOperand']) && isset($_POST['operator'])) {
        $FirstOperand = (float)$_POST['FirstOperand'];
        $SecondOperand = (float)$_POST['SecondOperand'];
        $operator = $_POST['operator'];
        if ($operator == "+") {
            $result = $FirstOperand + $SecondOperand;
        } elseif ($operator == "-") {
            $result = $FirstOperand - $SecondOperand;
        } elseif ($operator == "*") {
            $result = $FirstOperand * $SecondOperand;
        } elseif ($operator == "/") {
            if ($SecondOperand == 0) {
                $result = "Số thứ 2 ko thể là 0. Mời nhập lại.";
            } else $result = $FirstOperand / $SecondOperand;
        }
        echo "<h1>Results:  $FirstOperand $operator $SecondOperand = ";
        echo $result;
        echo "</h1>";
    } else {
        echo "Bạn chưa nhập.";
    }

}

?>


<html>
<header>
    <title>[Bài tập] Ứng dụng Calculator</title>
    <style>

        .inline {
            display: inline-block;
            margin: 3em;
        }

    </style>
</header>

<body>
<br>
<h1>Ứng dụng Calculator</h1>
<br>
<fieldset class="inline">
    <legend>Calculator</legend>
    <form method="POST">
        First Operand <input type="number" name="FirstOperand"><br><br>
        Operator <select name="operator">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br><br>
        Second Operand <input type="number" name="SecondOperand"><br><br>
        <input type="submit" id="submit" value="Calculate">
    </form>
</fieldset>


</body>


</html>
