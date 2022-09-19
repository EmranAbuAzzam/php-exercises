<?php
echo '<h3> ex1 </h3>'; //ex1
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";

echo '<h3> ex2 </h3>'; //ex2
$colors = array('white', 'green', 'red'); 
echo "<ul>";
echo "<li>". implode('</li> <li>',$colors). '</li>';
echo "</lu>"

?>
<?php
echo '<h3> ex3 </h3>'; //ex3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}

echo "<br>";

echo '<h3> ex4 </h3>'; //ex4

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";


echo '<h3> ex5 </h3>'; //ex5

$original = array( '1','2','3','4','5' );
echo 'Original array : '."<br>";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " <br> After inserting '$' the array is : "."<br>";
foreach ($original as $x) 
{echo "$x ";}
echo "<br>";

echo '<h3> ex6 </h3>'; //ex6


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
print_r($fruits);

echo "<br>";

echo '<h3> ex7 </h3>'; //ex7


$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>"; 
sort($temp_array);
echo " List of five lowest temperatures :";
"<br>";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


echo '<h3> ex8 </h3>'; //ex8

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);
print_r($result);

echo "<br>";

echo '<h3> ex9+10 </h3>'; //ex9+10

function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array("red","blue","WHITE","yellow");
echo 'Actual array <br>';
print_r($Color);
echo 'Values are in lower case.<br>';
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.<br>';
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);

echo '<h3> ex11 </h3>'; //ex11

echo implode(",",range(200,250,4))."<br>";


echo '<h3> ex12 </h3>'; //ex12

$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);

echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';


echo "<br>";
echo '<h3> ex13 </h3>'; //ex13


$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "<br>";


echo '<h3> ex14 </h3>'; //ex14



function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."<br>");