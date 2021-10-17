<?php

$array = [
  "name" => "Bob",
  "age" => 12,
  "sports" => ["baseball", "soccer"],
];

echo $array["name"];
echo $array["age"];
echo $array["sports"][1];

var_dump($array);

unset($array["name"]);

var_dump($array);
