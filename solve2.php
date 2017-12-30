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
  $path = getenv("LD_LIBRARY_PATH");
  $new = "/opt/gurobi752/linux64/lib";
  $new .= ":$path";
  putenv("LD_LIBRARY_PATH=$new");
  $answer = shell_exec("./solveDiet out");
?>
