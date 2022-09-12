

<?php
$my_str = 'my name is emran .';
echo strtoupper($my_str) ."<br>";

echo strtolower("MY NAME IS EMRAN")."<br>";
?>

<?php

echo ucfirst("my name is emran ")."<br>";
?>
<?php

echo ucwords("emran abuazzam")."<br>";

$DATE = "085119";
echo '<br>';
echo date("H:i:s",(strtotime($DATE)))."<br>";

$word = "orange";
$mystring = "i am  a full stack developer at orange academy";
 

if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!"."<br>";
}


$path = "www.orange.com/index.php";
  
  $file1 = basename($path);
  
  
 
  echo $file1 . "\n"."<br>";
  
 
 

?>
<?php


$email  = 'info@orange.com';
  

  $username = strstr($email, '@', true);
  
  
  echo $username."\n"."<br>";
  

  $str = 'the new trainee is so genius.';
echo preg_replace('/the/', 'That', $str, 1)."\n" ."<br>"; 


$string1 = 'foorbarbaz';
$string2 = 'foobarbiz';

$array1 = preg_split('((.))u', $string1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
$array2 = preg_split('((.))u', $string2, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

$result = array_diff_assoc($array1, $array2);

$num_diff = count($result);
$first_diff = key($result);

echo "There are " . $num_diff . " differences between the two strings.\n";
echo "The first difference between the strings is at position " . $first_diff . ". (Zero Index) '$string1[$first_diff]' vs '$string2[$first_diff]'.\n"."<br>";


$first = array("Twinkle", "twinkle", "twinkle", "litlestar");  
var_dump($first)."<br>"; 
echo '<br>';
 
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";

echo '<br>';

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";

echo '<br>';

$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."\n";

echo '<br>';

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";




