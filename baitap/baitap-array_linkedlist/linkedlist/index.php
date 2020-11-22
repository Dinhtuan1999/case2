<?php
include_once "Mylist.php";

$linkedlist = new LinkList();


$linkedlist->insertFirst("Frist");
$linkedlist->insertFirst("Second");
$linkedlist->insertLast("Third");


print("<pre>" . print_r($linkedlist->readList(), true) . "</pre>");
print("<pre>" . print_r($linkedlist, true) . "</pre>");


$arr = [];
foreach ($linkedlist->getFirstNode() as $value) {
    //print("<pre>" . print_r($value, true) . "</pre>");
    if (is_object($value)) {
        //echo $value->data;
        array_push($arr, $value->data);
        //print("<pre>" . print_r($value, true) . "</pre>");
    } else {
        array_push($arr, $value);
    }

}

print("<pre>" . print_r($arr, true) . "</pre>");
print("<pre>" . print_r($linkedlist->getFirstNode(), true) . "</pre>");

//print("<pre>" . print_r($linkedlist->getLastNode(), true) . "</pre>");
