<html>
    <!DOCTYPE html>
<html>
<body background="map.jpg">
<form action="/project/search_1227_ui.php" method="POST"> 
<input type="submit" value="Submit" onclick="to_search()">
</form>
</body>
</html>
<?php
$Ycost = $_POST['Ycost'];
  $Ycarlories = $_POST['Ycarlories'];
  $Yproteins = $_POST['Yproteins'];
  $Ycarbohydrates = $_POST['Ycarbohydrates'];
  $YvitaminA = $_POST['YvitaminA'];
  $Ycalcium = $_POST['Ycalcium'];
  $Yfat = $_POST['Yfat'];
  $Ycholesterol = $_POST['Ycholesterol'];
  $Ysodium = $_POST['Ysodium'];
  $Yfiber = $_POST['Yfiber'];
  $YvitaminC = $_POST['YvitaminC'];
  $cost = $_POST['cost'];
  $carlories = $_POST['carlories'];
  $proteins = $_POST['proteins'];
  $carbohydrates = $_POST['carbohydrates'];
  $vitaminA = $_POST['vitaminA'];
  $calcium = $_POST['calcium'];
  $fat = $_POST['fat'];
  $cholesterol = $_POST['cholesterol'];
  $sodium = $_POST['sodium']; 
  $fiber = $_POST['fiber'];
  $vitaminC = $_POST['vitaminC'];
  $objective = $_POST['objective'];
  
  $myfile = fopen("userneutrition.txt", "w"); 
  fwrite($myfile,$Ycost);
  fwrite($myfile,",");
  fwrite($myfile,$cost);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycarlories);
  fwrite($myfile,",");
  fwrite($myfile,$carlories);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yproteins);
  fwrite($myfile,",");
  fwrite($myfile,$proteins);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycarbohydrates);
  fwrite($myfile,",");
  fwrite($myfile,$carbohydrates);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$YvitaminA);
  fwrite($myfile,",");
  fwrite($myfile,$vitaminA);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycalcium);
  fwrite($myfile,",");
  fwrite($myfile,$calcium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yfat);
  fwrite($myfile,",");
  fwrite($myfile,$fat);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycholesterol);
  fwrite($myfile,",");
  fwrite($myfile,$cholesterol);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ysodium);
  fwrite($myfile,",");
  fwrite($myfile,$sodium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yfiber);
  fwrite($myfile,",");
  fwrite($myfile,$fiber);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$YvitaminC);
  fwrite($myfile,",");
  fwrite($myfile,$vitaminC);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$objective);
  fclose($myfile);
  $answer = shell_exec("solveDiet userneutrition recipe");
?>