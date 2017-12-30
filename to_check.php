<html>
    <!DOCTYPE html>
<html>
<body background="map.jpg">
<form action="/project/nutrition.php" method="POST"> 

<input type="submit" value="確認營養表" onclick="to_neutrition()">

</form>

<form action="/project/solve2.php" method="POST"> 

<input type="submit" value="直接規劃食譜" onclick="to_neutrition()">

</form>

<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $txt = ".txt";
  $neutrition = "neutrition.txt";
  $neutrition = $a.$neutrition;
  $a = $a.$txt;

  $myfile = fopen("userInfo.txt", "w"); 
  fwrite($myfile,$b);
  fwrite($myfile,",");
  fwrite($myfile,$c);
  fclose($myfile);
  $answer = shell_exec("./nutritionTable userInfo.txt table.txt");
?>
<script type="text/javascript">


</script>

</body>
</html>
