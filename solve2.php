<?php
  $path = getenv("LD_LIBRARY_PATH");
  $new = "/opt/gurobi752/linux64/lib";
  $new .= ":$path";
  putenv("LD_LIBRARY_PATH=$new");
  $answer = shell_exec("./solveDiet table.txt");
  header("Location: /project/search_0101_ui.php");
?>
