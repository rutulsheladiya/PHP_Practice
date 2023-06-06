<?php
echo "Logical Operator" . "<br><hr>";
$a = 50;
$b = 60;

if ($a == 50 && $b == 60) {
  echo "Accept";
} else {
  echo "Ignore";
}
echo "<br><hr>";
if ($a == 59 && $b == 60) {
  echo "Accept";
} else {
  echo "Ignore";
}

echo "<br><hr>";
if ($a == 59 or $b == 60) {
  echo "Accept";
} else {
  echo "Ignore";
}
echo "<br><hr>";
if ($a == 59 || $b == 60) {
  echo "Accept";
} else {
  echo "Ignore";
}
