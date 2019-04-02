<?php

$name = "Ces";

echo "THE OWNER IS " . $name . "</br>";
echo "hello" . "</br> <hr>";

$a = 1;
$b = 2;
$c = 1 + 2;
echo $c . "<hr>";

// === equivalent

$d = 3;
$e = 4;

if ($d == $e) {
    echo "EQUAL!";}
else { echo "NOT EQUAL!";}

echo "<hr>";


$arr = ['a', 'b', 'c', 'd', 'e'];
// zero-based array
echo $arr [2] . "</br>";
echo $arr [4] . "</br>";

// key-based array may pangalan each values
$arr = ["first" => "s",
        "second" => "k"];

echo $arr ["first"];
echo "<hr>";

//for loop

$arr1 = ['kei', 'chii', 'yutti', 'yuya'];
$arr = ["first" => "a",
        "second" => "b"];
foreach ($arr1 as $name) {
    echo $name . "</br>";
    if ($name == "yuya") {
        echo "Found him!";
        continue;
    }
}

$first = "Ces";
$last = "B";

function join_names($first, $last = "Cruz"){
    echo $first." ".$last;
}
