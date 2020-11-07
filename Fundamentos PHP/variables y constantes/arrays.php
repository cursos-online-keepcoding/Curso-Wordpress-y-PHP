<?php

// Arrays simples, con referencias y múltiples
$array1 = array("foo", "bar", "hello", "world");

$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array3 = [
    "foo" => "bar",
    "bar" => "foo",
];


$multi_array = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);