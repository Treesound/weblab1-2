<?php
//task 1 - access by reference
echo "<b>task 1 - access by reference</b><br>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and 2 bottles of soda";

echo "\nYour order is: $very_bad_unclear_name.";

//task 2 - numbers
echo "<br>";
echo "<b>task 2 - numbers</b><br>";
$variableOne = 50;
echo $variableOne;
echo "<br>";
$secondVariable = 3.02e7;
echo $secondVariable;
echo "<br>";
echo "13" - "1";
echo "<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo $lastMonth - $thisMonth;
?>