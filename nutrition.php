<html>
    <!DOCTYPE html>
<html>
<style>
 body {
    background: url("map.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding-top: 40px;
  }
  #detail_url {
    /*border: none;*/
  }
//這裡是讀取條案按鍵

.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.btn {
  position: relative;
  display: inline-block;
  letter-spacing: 1.2px;
  padding: 12px 32px;
  text-align: center;
  text-transform: uppercase;
  overflow: hidden;
  z-index: 1;
  cursor: pointer;
}
.btn:focus {
  outline: none;
}
.btn--primary {
  color: black;
}
.btn--border {
  border-width: 1px;
  border-style: solid;
  border-radius: 10px;
  box-sizing: border-box;
}
.btn--animated {
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
}
.btn--animated.btn--border.btn--primary {
  border: 1px solid lightslategray;
}
.btn--animated:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: lightslategray;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
  z-index: -1;
}
.btn--animated:hover {
  color: white;
}
.btn--animated:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.45, 1.64, 0.47, 0.66);
          transition-timing-function: cubic-bezier(0.45, 1.64, 0.47, 0.66);
}
</style>
<form action="/project/solve.php" method="POST">
objective &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="objective" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size = 1;>(0=cost 1=calories 2=carbohydratye 3=protein/(fat+1) 4=protein)
<br><br>
cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name = "Ycost" value = "<?php     $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10); echo $contents; ?>"><input type = "text" name="cost" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); echo $contents; ?>" size="1">(0 = ignore 1 = at least 2 = at most)
<br><br>
carlories(kcal)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ycarlories" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="carlories" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
proteins(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yproteins" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="proteins" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
carbohydrates(g)<input type="text" name="Ycarbohydrates" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="carbohydrates" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
vitamin A(IU)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="YvitaminA" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="vitaminA" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br> 
calcium(mg)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ycalcium" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="calcium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10); echo $contents; ?>" size="1">
<br><br>
fat(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yfat" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="fat" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
cholesterol(mg)&nbsp;&nbsp;<input type="text" name="Ycholesterol" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="cholesterol" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br> 
sodium(mg)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Ysodium" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="sodium" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
fiber(g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Yfiber" value = "<?php $myfile = fopen('table.txt', 'r');$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="fiber" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">
<br><br>
vitamin C(IU)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="YvitaminC" value = "<?php $myfile = fopen('table.txt', 'r');      $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents;?>"><input type = "text" name="vitaminC" value = "<?php $myfile = fopen('table.txt', 'r'); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10); $contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);$contents = fgets($myfile, 10);echo $contents; ?>" size="1">

<br>
<br>
<br>
<div id = "getlocbutton" class = "wrapper">
<button class="btn btn--border btn--primary btn--animated" id = "sub" type = "submit" onclick="togo()" STYLE="background-color: transparent;"><strong>Submit
</button>
</div>
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
