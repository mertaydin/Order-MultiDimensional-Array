<?php

require_once('makeorder.php');

$order = new makeorder();

$dummy_array = array(
    array(
        'id'    =>  1,
        'name'  =>  "Mert",
        'old'   =>  26
    ),
    array(
        'id'    =>  1,
        'name'  =>  "Ali",
        'old'   =>  24
    ),
    array(
        'id'    =>  1,
        'name'  =>  "Yunus",
        'old'   =>  22
    ),
    array(
        'id'    =>  1,
        'name'  =>  "Yuncay",
        'old'   =>  35
    ),
    array(
        'id'    =>  1,
        'name'  =>  "Gülten",
        'old'   =>  32
    ),
);

echo "<h1> Unordered Array </h1> <br> <pre>";

print_r($dummy_array);

echo "<br> <hr> <br>";

echo "<h1> Ordered Array by Old key </h1> <br> <pre>";

$dummy_array = $order->makeOrderWithBubbleSort($dummy_array, 'old');

print_r($dummy_array);
