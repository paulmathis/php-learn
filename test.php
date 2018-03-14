<?php

$array = [
  'name' => 'Paul',
  'age' => 28
];

$keys = array_keys($array);
$values = array_values($array);

echo implode("', '", $values);
