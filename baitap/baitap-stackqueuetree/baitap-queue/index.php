<?php
class Node {
    public $value;
    public $next;

}
class Queue{
    private $font = null;
    private $back = null;

    public function isEmpty(){
        return $this->font == null;
    }
    public function enqueue ($value){
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()){
            $this->font = $this->back;
        }
        else {
            $oldBack->next = $this->back;
        }
    }
    public function dequeue(){
        if($this->isEmpty()){
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
$patient = new Queue();

$patient->enqueue(1);
 $patient->enqueue(2);
$patient->enqueue(3);
$patient->enqueue(4);

//while (!$queue->isEmpty()){
//    echo $queue->dequeue()."\n";
//}
echo $patient->dequeue()."\n";
echo $patient->dequeue()."\n";
$patient->isEmpty();
var_dump($patient->isEmpty());
print("<pre>" . print_r($patient, true) . "</pre>");
