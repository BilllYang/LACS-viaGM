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

.wrapper1 {
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
<body background="map.jpg">
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<div style = "text-align:center">
<form action="/project/to_check.php" method="POST">
暱稱: <input type="text" name="a"><br>
<br>
性別: <input type="text" name="b"><br>
<br>
年齡: <input type="text" name="c"><br> 
<br>
<div id = "button" class = "wrapper1">
<button class="btn btn--border btn--primary btn--animated" id = "sub" type = "submit" onclick="togo()" STYLE="background-color: transparent;"><strong>送出資料
</button>
</div>

</form>
</div>
<script type="text/javascript">
		function togo() {
      document.getElementById("sub").onclick = function() {
      document.getElementById("sub").submit();
    	}

	}

</script>

</body>
</html>