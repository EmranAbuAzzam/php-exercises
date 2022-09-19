<?php
$start_time = microtime(TRUE);
?>
<html>
<body>
<div id="wrapper">
<h1>Get Page Loading Time Using PHP</h1>

Your WebPage Content

</div>
</body>
</html>

<?php
$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo 'Page generated in '.$time_taken.' seconds.';




?>