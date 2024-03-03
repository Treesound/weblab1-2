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

//task 15 - functions
echo "<br>";
echo "<br><b>task 15 - functions</b><br>";
function printStringReturnNumber($inputString){
    echo $inputString."<br>";
    return (float)$inputString;
}
$myNum = (printStringReturnNumber("68904"));
echo $myNum ."<br>";

//task 16 - functions (continuation)
echo "<br>";
echo "<br><b>task 15 - functions</b><br>";

function increaseEnthusiasm($inputString){
    echo $inputString . '!' . "<br>";
}
increaseEnthusiasm("testing Enthusiasm");

function repeatThreeTimes($input){
    for ($i=0;$i<3;$i++){
        echo $input . "<br>";
    }
    
}
repeatThreeTimes("repeating ");

function cut ($string, $symbolsLeft = 10){
    $result = '';
    for ($i=0; $i<$symbolsLeft; $i++){
        $result .= $string[$i];
    }
    echo $result . "<br>";
}
cut ("leave only the first 5 symbols", 5);


//element - индекс элемета в массиве, с которого начинаем обход. По умолчанию 0
function recursiveArrayDisplay($array, $element = 0){
    if ($element==(count($array)))
        return;
    echo $array[$element] . " ";
    recursiveArrayDisplay($array, ($element+1));
}
$numberArray = array (1,2,3,4,5,6,7,8,9,999);
recursiveArrayDisplay($numberArray);

echo "<br>";
function addingDigits($input){
    $result = 0;
    while ($input>0){
        $result += $input%10;      
        $input = floor($input/10); 
    }
    if ($result > 9){   
        $result = addingDigits($result);
    }     
    echo $result;  
}
echo addingDigits(1999);


//task 17 - arrays
echo "<br>";
echo "<br><b>task 17 - arrays</b><br>";
//в моем массиве будет 10 элеметнов, но можно конечно задать любое значение
$arrayX = array();
for ($i=0; $i<10; $i++){
    array_push($arrayX, "x");
    for ($j=$i; $j>0; $j--)
        $arrayX[$i] .= "x";
}
echo print_r($arrayX) . "<br>";

function arrayFill($value, $numOfElements){
    $currentArray=array();
    for ($i=0; $i<$numOfElements; $i++)
        array_push($currentArray, "$value");
    return $currentArray;
}
$arrayTest = array(arrayFill("Y", 8));
echo print_r($arrayTest) . "<br>";

$arrayForCounting = array(array (1, 2, 3), array (4, 5), array(6));
$sum = 0;
foreach ($arrayForCounting as $row){
    foreach ($row as $column)
        $sum +=$column;
}
echo "Array sum: " . $sum . "<br>";

$values=1;
$arrayToTen = array(array());
for($i=0; $i<3; $i++)
    for($j=0; $j<3; $j++){
        $arrayToTen[$i][$j]=$values;
        $values++;
}
echo print_r($arrayToTen) . "<br>";

//Создайте массив с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, 
//а третий элемент на четвертый. Результаты сложите, присвойте переменной $result.
// Выведите на экран значение этой переменной.
$fourElements = array (2, 5, 3, 9);
echo $result = $fourElements[0]*$fourElements[1]+$fourElements[2]*$fourElements[3] . "<br>";

$user = array("name"=>"Ivan",
                "surname"=>"Ivanov",
                "patronymic"=>"Ivanovich");
echo $user["surname"] . " " . $user["name"] . " " . $user["patronymic"] . "<br>";

$date = array("year"=>"2024",
                "month"=>"March",
                "day"=>"03");
echo $date["year"] . "-" . $date["month"] . "-" . $date["day"] . "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$count = 0;
foreach ($arr as $value)
    if ($value != NULL)
        $count++;
echo "Number of elements: " . $count . "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$numberOfElements = count($arr);
echo "Last element: " . $arr[$numberOfElements-1] . "<br>" . "Penultimate element: " . $arr[$numberOfElements-2] . "<br>";


//task 18 - if/else
echo "<br>";
echo "<br><b>task 18 - if/else</b><br>";

function sumBigger10 ($one,$two){
    if ($one + $two > 10) 
        return true;
    else 
        return false;
}
echo "Is 20 plus 5 bigger than 10?: " . sumBigger10(20,5) . "<br>";

function equal ($one,$two){
    if ($one === $two) 
        return true;
    else 
        return false;
}
echo "Are the numbers 20 and 20 equal?: " . equal(20,20) . "<br>";

$test = 0;
//оригинальный код
if ($test == 0) {
    echo 'верно';
}

echo "<br>";

//сокращенный 
//если выражение в скобках верно то программа возвращает true, не обязательно писать "верно"
echo ($test == 0) . "<br>";



function age ($age){
    if ($age < 10 || $age > 99)
        return "Age is bigger than 99 or smaller than 10" . "<br>";
    else {
        $sum = 0;
        while ($age>1){
            $sum+=$age%10;
            $age=floor($age/10);
        }
        if ($sum<10)
            return "The sum of digits is a single digit number equal to " . $sum  . "<br>";
        else 
            return "The sum of digits is a double digit number equal to ". $sum  . "<br>";
    }
}
echo "testing for 200: " . age(200);
echo "testing for 20: " . age(20);
echo "testing for 88: " . age(88);


function threeOrNot($arr){
    if (count($arr)==3){
        $sum = 0;
        foreach ($arr as $value){
            $sum+=$value;
        }
        echo "Sum of values: " . $sum . "<br>";  
    }
    else echo "Not 3 elements". "<br>";
}
$arr = array(4,6,7);
echo threeOrNot($arr);    


//task 19 - loops  
echo "<br>";
echo "<br><b>task 19 - loops</b><br>";

for ($i=0; $i<21; $i++){
    for ($j=$i; $j>0; $j--){
        echo "x";
    }
echo "<br>";   
}
        

?>