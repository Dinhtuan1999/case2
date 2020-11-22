<?php
class Node {
    public $value;
    public $next;
}
class Patient {
    private $font = null;
    private $back = null;

    public function isEmpty()
    {
        return $this->font == null;
    }
    function sortByOrder($a, $b) {
        return $a[1] - $b[1];
    }
    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = [$name, $code];
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}

$patient = new Patient();
$patient->enqueue("Smith", 5);
$patient->enqueue("Jones", 4);
$patient->enqueue("Fehrenbach", 6);
$patient->enqueue("Brown", 1);


//print("<pre>" . print_r($queue, true) . "</pre>");die;

$arr = [];
while(!$patient->isEmpty()){
    $arr[] = $patient->dequeue();
}


foreach ($arr as $val){
    echo $val[0] . " - ".$val[1] . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


usort($arr, function($b, $a) {
    return $a[1] - $b[1];
});


foreach ($arr as $value){
    echo $value[0] . " - ".$value[1] . "<br>";
}

print("<pre>" . print_r($patient, true) . "</pre>");

