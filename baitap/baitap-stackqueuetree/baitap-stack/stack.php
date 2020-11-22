<?php
class ReadingList {
    protected $stack;
    protected $limit;

    public function __construct($limit = 10){
        $this->stack = array();
        $this->limit =$limit;
    }
    public function push($item){
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack,$item);
        }
        else {
            throw new RunTimeException('Stack is full!');
        }
    }
    public function pop(){
        if ($this->isEmpty()){
            throw new RunTimeException ('stack is empty!');
        }
        else {
            return array_shift($this->stack);
        }
    }
    public function isEmpty(){
        return empty($this->stack);
    }
}
$myBooks = new ReadingList();
$myBooks->push('one book');
$myBooks->push('when i say ');
$myBooks->push('what is love');
$myBooks->push('how do you like that');
$myBooks->push('do you love me');

echo $myBooks->pop().'<br>';
echo $myBooks->pop().'<br>';
echo $myBooks->pop().'<br>';

$myBooks->push('what time is it');
$myBooks->push('what is this');
echo $myBooks->isEmpty();
var_dump($myBooks->isEmpty());

print("<pre>" . print_r($myBooks, true) . "</pre>");
