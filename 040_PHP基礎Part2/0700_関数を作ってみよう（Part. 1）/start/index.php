<?php

$numbers = [1, 2, 3, 4, 5, 6, 7];
$numbers2 = [1, 2, 3, 4];

function sum($numbers)
{
  $sum = 0;
  foreach ($numbers as $num) {
    $sum = $sum + $num;
  }
  return "合計値：{$sum}";
}

echo sum($numbers);
