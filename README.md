# OrderMultiDimensionalArray
So simple!

Make your multidimensional array ordered with your selected array key.


<?php

require_once('makeorder.php');

$order = new makeorder();

$dummy_array = $order->getDummyArray();

echo "<h1> Unordered Array </h1> <br> <pre>";

print_r($dummy_array);

echo "<br> <hr> <br>";

echo "<h1> Ordered Array by Old key </h1> <br> <pre>";

$dummy_array = $order->makeOrderWithBubbleSort($dummy_array, 'old');

print_r($dummy_array);

?>
