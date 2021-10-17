<?php
$array = ["taro", "hanako", "jiro"];
print_r($array);
var_dump($array);
$array[1] = "kagami";
$array[] = "push String";
echo $array[1];
print_r($array);
echo count($array);
//  count($array) === .length;
for ($i = 0; $i < count($array); $i++) {
  echo "<div>{$array[$i]}</div>";
}
foreach ($array as $i => $v) {
  echo "<div>{$i}：{$v}</div>";
}
