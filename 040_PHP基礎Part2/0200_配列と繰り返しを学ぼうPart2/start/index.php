<?php

$array = [["tableee", 1000], ["chair", 100], ["bed", 500]];

print_r($array);
var_dump($array);

// $array[1][1] = 2500;
// echo $array[1][1];

// array_shift($array);
// array_pop($array);
array_splice($array, 1, 1, [["replace", 500]]);
var_dump($array);
foreach ($array as $val) {
  echo "商品：{$val[0]}は{$val[1]}円です。";
}
