<?php
function check($sym)
{
    $stack = new SplStack();
    $stack1 = new SplStack();
    $arr = str_split($sym);

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === "(") {
            $stack->push($arr[$i]);
     }
        elseif ($arr[$i] === ")"){
            $stack1->push($arr[$i]);
        }
    }
    if ($stack->count() !== $stack1->count()) {
        return false;
    } else{
        return true;
    }

}
var_dump(check(")s * (s – a) *( s – b) * (s – c   "));
