<html>
    <!DOCTYPE html>
<html>
<body background="map.jpg">
<style>
button span {
  background: #FFF;
  display: block;
  padding: 5px 15px;
  border-radius: 5px;
  border: 2px solid #000;
}
button:hover {
  box-shadow: 0 2px 0 #000, 0 2px 0px 2px #f03755;
}
button:active {
  top: 4px;
  padding-bottom: 0px;
  box-shadow: 0 1px 0 #000;
}
button {
  position: relative;
  float: left;
  font: normal 22px/25px "Patrick Hand", sans-serif;
  margin-right: 10px;
  text-transform: uppercase;
  color: #000;
  text-decoration: none;
  padding-bottom: 3px;
  border-radius: 5px;
  box-shadow: 0 2px 0 #000;
  transition: padding 0.1s, box-shadow 0.1s, top 0.1s;
  background-image: url('data:image/gif;base64,R0lGODlhBAAEAIABAAAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjEgNjQuMTQwOTQ5LCAyMDEwLzEyLzA3LTEwOjU3OjAxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1LjEgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NUY1OENCRDdDMDYxMUUyOTEzMEE1MEM5QzM0NDVBMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NUY1OENCRTdDMDYxMUUyOTEzMEE1MEM5QzM0NDVBMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk1RjU4Q0JCN0MwNjExRTI5MTMwQTUwQzlDMzQ0NUEzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk1RjU4Q0JDN0MwNjExRTI5MTMwQTUwQzlDMzQ0NUEzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkEAQAAAQAsAAAAAAQABAAAAgYEEpdoeQUAOw==');
}
</style>
<form action="/project/solve.php" method="POST">
objective&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="objective" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); echo  $contents; ?>" size = 1;>(0=cost 1=calories 2=carbohydratye 3=protein/(fat+1) 4=protein)
<br><br>
cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name = "Ycost" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10); echo $contents; ?>"><input type = "text" name="cost" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10); echo $contents; ?>" size="1">(0 = ignore 1 = at least 2 = at most)
<br><br>
carlories(kcal)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ycarlories" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="carlories" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
proteins(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yproteins" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="proteins" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
carbohydrates(g)<input type="text" name="Ycarbohydrates" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="carbohydrates" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
vitamin A(IU)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="YvitaminA" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="vitaminA" value = "<?php $myfile = fopen('table.txt', 'r');  $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br> 
calcium(mg)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ycalcium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="calcium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10); echo $contents; ?>" size="1">
<br><br>
fat(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yfat" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="fat" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
cholesterol(mg)&nbsp;&nbsp;<input type="text" name="Ycholesterol" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="cholesterol" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br> 
sodium(mg)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ysodium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="sodium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
fiber(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yfiber" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="fiber" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
vitamin C(IU)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="YvitaminC" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="vitaminC" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br>
<br>
<br>
<br>
<button class="btn" type="submit" id = "sub" onclick="togo()"><span>
submit
</span></button>
</form>
<?php
  /*$a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $txt = ".txt";
  $neutrition = "neutrition.txt";
  $neutrition = $a.$neutrition;
  $a = $a.$txt;

  $myfile = fopen($a, "w"); 
  fwrite($myfile,$b);
  fwrite($myfile,",");
  fwrite($myfile,$c);
  fclose($myfile);
  $answer = shell_exec("./nutritionTable in out");*/
?>
<script type="text/javascript">
	  function togo() {
      document.getElementById("sub").onclick = function() {
      document.getElementById("sub").submit();
    }

	}

</script>

</body>
</html>
