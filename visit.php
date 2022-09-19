<?php


$visitors = file_get_contents('visitors.txt');
$visitors = $visitors+1;

file_put_contents('visitors.txt',$visitors);

$content = file_get_contents('visitors.txt');
echo "<h1>the number of visitors is: ".$content."</h1><br>";


?>