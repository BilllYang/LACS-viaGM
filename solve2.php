<?php
  $path = getenv("LD_LIBRARY_PATH");
  $new = "/opt/gurobi752/linux64/lib";
  $new .= ":$path";
  putenv("LD_LIBRARY_PATH=$new");
  $answer = shell_exec("./solveDiet out");
  header("Location: /project/search_1227_ui.php");
?>