<?php
$json = '{
    "a":1,
    "b":2,
    "c":3,
    "d":4,
    "e":5
}';

echo "<pre>";

$a = json_decode($json);

$b = json_decode($json, true);

print_r($a);
print_r($b);

echo $a->c;

echo $b['a'];

