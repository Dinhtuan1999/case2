<?php
class Dancer {
    public $name;
    public $gender;

    public function __construct($name,$gender)
    {
        $this->name =$name;
        $this->gender =$gender;
    }

}
$queue1 = new SplQueue();
$queue2 = new SplQueue();

$dancer1 = new Dancer('jone','male');
$dancer4 = new Dancer('ys','male');
$dancer6 = new Dancer('darius','male');
$dancer7 = new Dancer('lee','male');
$dancer2 = new Dancer('mia','female');
$dancer3 = new Dancer('zoe','female');
$dancer5 = new Dancer('ase','female');

$queue1->enqueue($dancer1);
$queue1->enqueue($dancer4);
$queue1->enqueue($dancer6);
$queue1->enqueue($dancer7);

$queue2->enqueue($dancer2);
$queue2->enqueue($dancer3);
$queue2->enqueue($dancer5);

function check($queue1,$queue2){
    if($queue1->count() ===0 || $queue2->count() === 0){
        echo 'co nguoi phai doi';
    }
    else{
        echo ($queue1->dequeue()->name)." and ".($queue2->dequeue()->name);
    }
}
function countMait($queue1,$queue2){
    return ($queue1->count()+$queue2->count());
}
 check($queue1,$queue2);
echo "<br>";
 check($queue1,$queue2);
 echo "<br>";
echo countMait($queue1,$queue2);
//print("<pre>" . print_r($queue1, true) . "</pre>");
