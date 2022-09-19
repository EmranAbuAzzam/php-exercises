<?php
$start_time = microtime(TRUE);

$cookie_name = "user";
$cookie_value = "emran";
setcookie($cookie_name, $cookie_value,time() + 5);
?>

<?php


$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,500);
 
echo '<br><br>Page generated in '.$time_taken.' seconds.<br><br>';

echo "The Script Name is : ( ". basename($_SERVER['SCRIPT_NAME'])." )<br>";
echo "The Project Name is : ( ". basename($_SERVER['PHP_SELF'],".php"). " )<br>";

 $cookie_name="emran";

if(!isset($_COOKIE[$cookie_name])) {
      echo "<br><br>Cookie named '" . $cookie_name . "' is not set!";
    } else {
      echo "<br><br>Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
      echo "<br>".  $end_time;
 
    }



    
    ?>