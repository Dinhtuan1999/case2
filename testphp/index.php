<?php

class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }
    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }
    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }

    }
    public function top() {
        return current($this->stack);
    }
    public function isEmpty() {
        return empty($this->stack);
    }

}
$myBooks = new ReadingList();
$myBooks->push("A Dream of Spring");
$myBooks->push("a new book");
$myBooks->push("what do you think");
$myBooks->push("one mode");
//echo $myBooks->pop();
echo $myBooks->top();

print("<pre>" . print_r($myBooks, true) . "</pre>");
