<?php
//task 1 - access by reference
echo "<b>task 1</b><br>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and 2 bottles of soda";

echo "\nYour order is: $very_bad_unclear_name.";

?>