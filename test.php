<?php
$a = null;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}

$b = 0;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
?>