<?php

echo '<h3> ex1 </h3>'; //ex1
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."<br>";
  }
}

echo"<br>";
echo '<h3> ex2 </h3>'; //ex2
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";



echo '<h3> ex8 </h3>'; //ex8


$text="Orang coding Academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";


echo '<h3> ex6 </h3>'; //ex6
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo " $n = $x"."\n";
?>
<?php
echo '<h3> ex11 </h3>'; //ex11

$n = 5; 
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }


   echo '<h3> ex10 </h3>'; //ex10


   for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."<br>" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."<br>";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."<br>";
   }
     else
   {
     echo $i."<br>";
   }
 }

 echo '<h3> ex4 </h3>'; //ex4

 function numbers(){

  for ($i=0; $i < 5; $i++) { 
      for ($j=4; $j >=0; $j--) { 
          if ($j <= $i) {
              echo  (1+$i)." ";
          }else{
              echo "1"." ";
          }
      }
      echo "<br>";
  }
}
numbers();



echo '<h3> ex3 </h3>'; //ex3

function nestedAlphabet(){

  for ($i=0; $i < 5; $i++) { 
      for ($j=4; $j >=0; $j--) { 
          if ($j <= $i) {
              echo  chr(ord('A')+$i)." ";
          }else{
              echo "A"." ";
          }
      }
      echo "<br>";
  }
}
nestedAlphabet()
?>

<?php

echo "problem solving";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$coun = count($my_array);
$small=strlen($my_array[0]);
$large=strlen($my_array[0]);
for($i=0;$i<$coun;$i++){
    if(strlen($my_array[$i])<$small){
$small = strlen($my_array[$i]);
    }
    if(strlen($my_array[$i])>$large)
    $large = strlen($my_array[$i]);

}
echo "<br>"; 
echo $small." ".$large;
echo "<br>"; 
?>