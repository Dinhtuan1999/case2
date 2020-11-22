
<fieldset>
    <legend>NHap cac so dien thoai, cach nhau boi dau phay:</legend>
    <textarea id="confirmationText" form="confirmationForm" class="text" cols="55" rows ="5" name="phone" ></textarea>
    <form method="post" id="confirmationForm" name="confirmationForm">
        <input type="submit" value="Submit" name="btn">

    </form>
</fieldset>

<?php

$viettel = "086, 096, 097, 098, 032, 033, 034, 035, 036, 037, 038, 039";
$vt = explode(", ", $viettel);
$mobifone = "089, 090, 093, 070, 079, 077, 076, 078";
$mb = explode(", ", $mobifone);
$vinaphone = "088, 091, 094, 083, 084, 085, 081, 082";
$vina = explode(", ", $vinaphone);

$list = ["viettel" => $vt, "mobifone" => $mb, "vinaphone" => $vina];

if (!empty($_POST["phone"])) {
    $listphone = $_POST['phone'];
    $phone = explode(",", str_replace(" ", "", $listphone));
    $first3Number = [];
    foreach ($phone as $val) {
        $first3Number[] = substr($val, 0, 3);
    }

    foreach ($first3Number as $key => $v) {
        if (in_array($v, $vt) == true) {
            echo "$phone[$key] day la dien thoai viettel<br>";
        } elseif (in_array($v, $mb) == true) {
            echo "$phone[$key] day la dien thoai mobiphone<br>";
        } elseif (in_array($v, $vina) == true) {
            echo "$phone[$key] day la dien thoai vinaphone<br>";
        }
    }
}
