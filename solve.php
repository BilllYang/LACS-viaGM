<?php
  $objective = $_POST['objective'];
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
 
  
  if(file_exists('out.txt')){ 
            unlink('table.txt');//將檔案刪除
        }

  $myfile = fopen("table.txt", "w"); 
  fwrite($myfile,$objective);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycost);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$cost);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycarlories);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$carlories);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yproteins);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$proteins);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycarbohydrates);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$carbohydrates);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$YvitaminA);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$vitaminA);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycalcium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$calcium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yfat);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$fat);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ycholesterol);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$cholesterol);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Ysodium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$sodium);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$Yfiber);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$fiber);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$YvitaminC);
  fwrite($myfile,"\r\n");
  fwrite($myfile,$vitaminC);
 
  
  fclose($myfile);
  $path = getenv("LD_LIBRARY_PATH");
  $new = "/opt/gurobi752/linux64/lib";
  $new .= ":$path";
  putenv("LD_LIBRARY_PATH=$new");
  $answer = shell_exec("./solveDiet table.txt");
  header("Location: /project/search_0101_ui.php");
?>
