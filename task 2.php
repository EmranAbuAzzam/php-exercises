

<?php
//////////// ex1
function primenumber($MyNum) {
  $n = 0;

  for($i = 2; $i < ($MyNum/2+1); $i++) {
    if($MyNum % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $MyNum." is a prime number.";
  } else {
    echo $MyNum." is not a prime number.";
  }
}

primenumber(3);
echo '<br>';
?>


<?php 
////////ex2
function reverseString($str)
{
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= substr($str, $i, 1);
    }
    return $reversed;
}
echo reverseString("remove") . "<br>";
?>  

<?php
///////ex3
function checkLowerCase($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (substr($str, $i, 1) !== strtolower(substr($str, $i, 1))) {
            return "your string is not ok";
        }
    }
    return "your string is ok";
} echo checkLowerCase("Emran");
echo '<br>';
?>


<?php
///ex4
function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

  
  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

swap(12, 10);
echo '<br>';
?>
<?php
///ex6
function Armstrong($num){
    $numto="$num";
$sum=0;
$pow=0;

    for($i=0;$i<strlen($numto);$i++){

       $pow= pow($numto[$i],3);
       $sum=$sum+$pow;

    }

    if($num==$sum){
        echo $num." is  Armstrong";
    }
    else{
        echo $num."is not armstrong ";
    }


}
Armstrong(407);
echo '<br>';
?>

<?php
//ex7
function isPalindrome($str){
    $st=strtolower( str_replace(array( "+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^",
    "~", "*", "?", ":","\"","/","\\",","),"", $str));
    $after=explode(' ', $st);
$finalst="";
    for($i=0;$i<count($after);$i++){
        $finalst.=$after[$i];
      }
      $Rst=strrev($finalst);
    
    if($Rst==$finalst){
      echo  "yes  it is a palindrome";
    }
    else{
       echo "this string is not palindrome";
    }
}
isPalindrome("Eva, can I see bees in a cave?");

echo '<br>';
?>
<?php
//ex8
function removeDuplicate($arr)
{

    $outputArray = array();

    foreach ($arr as $inputArrayItem) {
        foreach ($outputArray as $outputArrayItem) {
            if ($inputArrayItem == $outputArrayItem) {
                continue 2;
            }
        }
        $outputArray[] = $inputArrayItem;
    }
    foreach ($outputArray as $item) {
        echo $item . " ";
    }
}

$array = [2,4,7,4,8,4];

echo "<br>";
removeDuplicate($array);
echo "<br>";
?>


<?php  
//ex1//////////////////////////////////////////////////////////////////////////////////////////////////
$year = 2032;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
echo '<br>';
 
//ex2 
$tempreture = 27;
function seasonTempreture($tempreture){

if ($tempreture < 20) {
    echo "its winter <br>";
} else {
    echo "its summertime <br>";
}
}
seasonTempreture($tempreture);


//ex3
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(2, 2)."it is summertime";

echo '<br>';



//ex5
function multipleOfThree($num)
{
    if ($num % 3 == 0 && $num > 0) {
        return "true";
    } else {
        return "false";
    }
}
echo multipleOfThree(20) . "<br>";

//ex6
function rangeBetween($num)
{
    if ($num >= 20 && $num <= 50) {
        return "true";
    } else {
        return "false";
    }
}

echo rangeBetween(25) . "<br>";


//ex7
function largestBetween($array)
{
    if ($array[0] >= $array[1] && $array[0] >= $array[2]) {
        return $array[0];
    } else if ($array[1] >= $array[0] && $array[1] >= $array[2]) {
        return $array[1];
    } else {
        return $array[2];
    }
}

echo largestBetween([20, 5, 1996]) . "<br>";



//ex8

function electricityBill($units)
{
    $bill = 0;
    if ($units <= 50) {
        $bill += $units * 2.5;
    }
    if ($units > 50 && $units <= 150) {
        $bill += 50 * 2.5;
        $bill += ($units - 50) * 5;
    }
    if ($units > 150 && $units <= 250) {
        $bill += 50 * 2.5;
        $bill += (100) * 5;
        $bill += ($units - 150) * 6.20;
    }
    if ($units > 250) {
        $bill += 50 * 2.5;
        $bill += (100) * 5;
        $bill += (100) * 6.20;
        $bill += ($units - 250) * 7.5;
    }
    return $bill;
}

echo electricityBill(50) . "<br>";


//ex9



function vote($age)
{
    if ($age < 18) {
        return "is no eligible to vote";
    } else {
        return "can vote";
    }
}

echo vote(13) . "<br>";




//ex10
function checkNumber($num)
{
    if ($num == 0) {
        return "zero";
    }
    if ($num > 0)
        return "positive";
    if ($num < 0)
        return "negative";
}

echo checkNumber(55) . "<br>";


function scoresAverage($arr)
{

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    $average = $sum / count($arr);
    if ($average < 100 && $average >= 90) {
        return "A";
    } else if ($average < 90 && $average >= 80) {
        return "B";
    } else if ($average < 80 && $average >= 70) {
        return "C";
    }
    else if ($average < 70 && $average >= 60) {
        return "D";
    }else if ($average < 60 && $average >= 0) {
        return "F";
    }
}

echo scoresAverage([60,86,95,63,55,74,79,62,50])."<br>";
?>

