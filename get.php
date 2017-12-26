<!DOCTYPE html>
<html>
<body>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$myfile = fopen("result.txt", "w"); 
fwrite($myfile,$a);
fwrite($myfile,",");
fwrite($myfile,$b);
fwrite($myfile,",");
fwrite($myfile,$c);
fclose($myfile);
?>

</body>
</html>