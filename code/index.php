<?php
//task 1 - access by reference
echo "<b>task 1 - access by reference</b><br>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and 2 bottles of soda";

echo "\nYour order is: $very_bad_unclear_name.";

//task 2 - numbers
echo "<br>";
echo "<br><b>task 2 - numbers</b><br>";
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

//task 11 - multiplication and division
echo "<br>";
echo "<br><b>task 11 - multiplication and division</b><br>";
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days/$numLanguages;
echo $daysPerLanguage;

//task 12 - exponentiation
echo "<br>";
echo "<br><b>task 12 - exponentiation</b><br>";
echo '8'**'2';

//task 13 - assignment operators
echo "<br>";
echo "<br><b>task 13 - assignment operators</b><br>";
$myNum = 50;
$answer = $myNum;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$myNum;
echo $answer;

//task 14 - mathematical functions
echo "<br>";
echo "<br><b>task 14 - mathematical functions</b><br>";

echo "<b>working with %</b>" . "<br>";
$a=10;
$b=3;
echo $a%$b;
echo "<br>";
if ($a%$b==0) echo "Делится " . $a/$b;
else echo "Делится c остатком " . $a%$b . "<br>     ";

echo "<b>working with sqrt and pow  </b>" . "<br>";
$st = pow(2,10);
echo $st . "<br>";
echo sqrt(245) . "<br>";
$arr1 = array(4, 2, 5, 19, 13, 0, 10);
$result = null;
foreach ($arr1 as $value){
    $result +=pow($value,2);
}

echo "<b>working with rounding operations</b>" . "<br>";
echo sqrt($result) . "<br>";
echo round(sqrt(379),0) . "<br>";
echo round(sqrt(379),1) . "<br>";
echo round(sqrt(379),2) . "<br>";
$for587 = array(
    "floor"=>floor(sqrt(587)), 
    "ceiling"=>ceil(sqrt(587))
);
echo print_r($for587) . "<br>";

echo "<b>working with min/max</b>" . "<br>";
echo "Min: " . min(4, -2, 5, 19, -130, 0, 10) . "<br>";
echo "Max: " . max(4, -2, 5, 19, -130, 0, 10) . "<br>";

echo "<b>working with randomness functions</b>" . "<br>";
echo rand() . " displaying a single random number" . "<br>";
for ($i = 0; $i<11; $i++){
    echo rand()."<br>";
}

echo "<b>working with abs</b>" . "<br>";
echo abs($a-$b);
$arrayWithNegatives = array(1, 2, -1, -2, 3, -3);
foreach ($arrayWithNegatives as &$value){
    $value = abs($value);
}
echo print_r($arrayWithNegatives) . "<br>";

echo "<b>general things</b>" . "<br>";
$divisibleNumber = 150;
$divisors = array(NULL);
$i=ceil($divisibleNumber/2);
while ($i>0){
    if ($divisibleNumber%$i==0){
        array_push($divisors, $i);
    }
    $i--;
}
echo print_r($divisors) . "<br>";

$array2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum=0;
$i=0;
while ($sum<=10){
    $sum+=$array2[$i];
    $i++;
}
echo "You have to add up first " . ($i) . " elements of the array" . "<br>";
?>