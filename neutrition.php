<html>
    <!DOCTYPE html>
<html>
<body background="map.jpg">
<form action="/project/search_1117_ui.php" method="POST">
cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="cost">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
carlories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="carlories">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
proteins&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="proteins">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
carbohydrates:<input type="text"><select name="carbohydrates">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
vitamin A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="vitaminA">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br> 
calcium &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="calcium">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
fat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="fat">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
cholesterol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="cholesterol">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br> 
sodium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="sodium">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
fiber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="fiber">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select><br><br>
vitamin C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><select name="vitaminC">
　<option value="0">忽略</option>
　<option value="1">至少</option>
　<option value="2">至多</option>
</select>
<br>
<br>
<br>
objective: <select name="Yourcost">
　<option value="0">cost</option>
　<option value="1">carlories</option>
　<option value="2">carbohydrate</option>
  <option value="3">protein/(fat+1)</option>
  <option value="4">protein</option>
</select><br>
<input type="submit" value="Submit" onclick="to_search()">
</form>
<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];

  $myfile = fopen("result.txt", "w"); 
  fwrite($myfile,$a);
  fwrite($myfile,"|");
  fwrite($myfile,$b);
  fwrite($myfile,"|");
  fwrite($myfile,$c);
  fclose($myfile);
  $file_content = file_get_contents("result.txt");
  $answer = shell_exec("a.exe a b");
?>
<script type="text/javascript">
	function to_search() {
		for (var i = 10000; i >= 0; i--) {
			
		}
		//window.open('/project/search_1117_ui.php','false')
	}

</script>

</body>
</html>