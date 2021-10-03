<?php
$a = null;
// True because $a is set

$b = 0;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
?>