<html>
    <!DOCTYPE html>
<html>
<style>
 body {
    background: url("vacation1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding-top: 40px;
  }
  #googleMap {
    position: fixed;
    top: -350px;
    left: 55%;
    width: 600px;
    height: 550px;
  }
  #getlocbutton {
    position: fixed;
    top: 650px;
    height: 100px;
  }
  #detail_url {
    /*border: none;*/
  }
  #res1 {
    position: fixed;
    top: -550px;
    left: 10%;
  }
  <!-- 
  BODY{overflow-y:hidden;} 
  --> 
//這裡是讀取條案按鍵
  body {
  position: relative;
  font-family: sans-serif;
  font-size: 14px;
}
.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.wrapper1 {
  position: absolute;
  top: 60%;
  left: 10%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper2 {
  position: absolute;
  top: 67%;
  left: 10%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper3 {
  position: absolute;
  top: 74%;
  left: 10%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper4 {
  position: absolute;
  top: 81%;
  left: 10%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper5 {
  position: absolute;
  top: 88%;
  left: 10%;
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
//彩虹按鍵
</style>
<body >

<!--<h2 id="wtf">HIHI</h2>-->
search: <input type="text" name="FirstName" id = search value="請輸入查詢字串"><br><button onclick="myMap()">搜尋</button>
<div id="photoblock">
  <a id="detail_url" href ="https://www.google.com.tw/search?q=" target="_blank"><img id="ph1" width= "450" height="300"></img></a>
</div>
<div class = "wrapper1">
        <div id = "choose1" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap("choose1")"><strong></div>
</div>
<div class = "wrapper2">
        <div id = "choose2" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap("choose2")"><strong></div>
</div>
<div class = "wrapper3">
        <div id = "choose3" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap("choose3")"><strong></div>
</div>
<div class = "wrapper4">
        <div id = "choose4" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap("choose4")"><strong></div>
</div>
<div class = "wrapper5">
        <div id = "choose5" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap("choose5")"><strong></div>
</div>
<div id="googleMap"></div>

<div id = "getlocbutton" class = "wrapper">
        <div class="btn btn--border btn--primary btn--animated" id = "getplace"><strong>取得所在地</div>
</div>

<?php
$file_content = file_get_contents("recipe.txt");
?>

<script type="text/javascript">
var myMap_cnt = 0;
var lAT;
var lNG;
var searchURL = "https://www.google.com.tw/search?q=";
var gallery = []; 
var placename = []; //place name 
var coordinate_rest = []; //lat & lng
var distanceArr = [];
var requestArr = [];
var meal = [];
var readcount=0;
var resultcnt=0;

//console.log(breakfast);
//console.log(lunch);
//console.log(dinner);
var BLD = '<?php echo $file_content ;?>';

document.getElementById ("getplace").addEventListener ("click", getLocation, false);


function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getPosition);
    } else { 
        alert() = "Geolocation is not supported by this browser.";
    }
}

function getPosition(position){
    lAT = position.coords.latitude;
    lNG = position.coords.longitude;
    //alert(lAT +"經緯"+lNG);
    alert(BLD);
}

function myMap(botton_id){
  //meal.push(document.getElementById(botton_id).innerHTML);
  myMap_cnt++;
  var local = new google.maps.LatLng(parseFloat(lAT), parseFloat(lNG));
  var search_text = document.getElementById("search").value;
  gallery = []; 
  placename = []; //place name 
  coordinate_rest = []; //lat & lng
  distanceArr = [];
  requestArr = [];
  readcount=0;
  resultcnt=0;

  mapProp = new google.maps.Map(document.getElementById("googleMap"), {
    center: local,
    zoom: 15
  });

  service = new google.maps.places.PlacesService(mapProp);

  var request= {
    location: local,
    radius: '5000',
    query: search_text
  };
  service.textSearch(request, callback);

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  function createMarker(place) {
        var infowindow;
        infowindow = new google.maps.InfoWindow();
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);

          
          for(var i=0; i<15; i++){
            if(placename[i]==place.name){
              document.getElementById("ph1").src = gallery[i];
              document.getElementById("detail_url").href = searchURL + placename[i];
            }
          }
        });
  }



  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
      }
      results.sort(function(a,b){return b.rating - a.rating;});
      for(var j = 0; j < 15; j++){
        createMarker(results[j]);
        createPhotoMarker(results[j]);
        alert(results[j].name + " " + results[j].rating);
        coordinate_rest.push({lat:results[j].geometry.location.lat(), lng:results[j].geometry.location.lng()});

        placename.push(results[j].name);
      }
      document.getElementById("ph1").src = gallery[0];
      document.getElementById("choose1").innerHTML = results[0].name;
      document.getElementById("choose2").innerHTML = results[1].name;
      document.getElementById("choose3").innerHTML = results[2].name;
      document.getElementById("choose4").innerHTML = results[3].name;
      document.getElementById("choose5").innerHTML = results[4].name;
      if(myMap_cnt === 4){
        calcRoute();
      }
    }
  }
}


function createPhotoMarker(place){
  var photoshow = place.photos;
  if (!photoshow) {
    return;
  }
  gallery.push(photoshow[0].getUrl({'maxWidth': 600, 'maxHeight': 400}));
}


function doCalulationAndResult(){

//  var id_1 = document.getElementById("wtf");
//  for(var k=0; k<105; k++) id_1.insertAdjacentText("beforeEnd", distanceArr[k].txt + "!!BREAK!!");
}

  




function calcRoute() {
  var cnt=0;
  for(var i=0; i<15; i++){
    for(var j=0; j<i; j++){ 
      var start = coordinate_rest[i].lat.toString() +","+ coordinate_rest[i].lng.toString();
      var end = coordinate_rest[j].lat.toString() +","+ coordinate_rest[j].lng.toString();
      var req = {
        origin: start,
        destination: end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        avoidHighways: true,
        avoidTolls: true
      };
      requestArr.push({"indexi":i, "indexj":j, "request":req});
      
      cnt++;
     
    }
  }

  processRequests();
}

function pauseBrowser(millis) {
    var date = Date.now();
    var curDate = null;
    do {
        curDate = Date.now();
    } while (curDate-date < millis);
}


function processRequests(){
  var i=0;
  var directionsService = new google.maps.DirectionsService();
  function submitRequest(indexi, indexj, callback){

    directionsService.route(requestArr[i].request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        var directionsDisplay = new google.maps.DirectionsRenderer();
        
        directionsDisplay.setDirections(response);
        var totalDistance=0;
        var legs = directionsDisplay.directions.routes[0].legs;

        for(var k=0; k<legs.length; ++k) {
          totalDistance += legs[k].distance.value;
        }

        callback(indexi, indexj, totalDistance);
        
      }
        else { console.log("Directions failed:"+status); --i;}
    });
    setTimeout(function(){
      nextRequest(doCalulationAndResult);
    }, i%10 != 0 ? 150 : 1000);
    
  }

  function nextRequest(cb){
    
    i++;
    if(i >= requestArr.length){
      pauseBrowser(1000);
      cb & cb();
      return;
    }
    submitRequest(requestArr[i].indexi, requestArr[i].indexj,function(indexi, indexj, pushitem){
      console.log(indexi + "," + indexj + "," + pushitem + "XXX");
        distanceArr.push({"dis":Number(pushitem), "indexi":placename[indexi], "indexj":placename[indexj], "txt": placename[indexi] + " to " +  placename[indexj] + ":" + Number(pushitem)/1000 + "km" + "-----"});
    });
  }

  submitRequest(requestArr[i].indexi, requestArr[i].indexj,function(indexi, indexj, pushitem){
        distanceArr.push({"dis":Number(pushitem), "indexi":indexi, "indexj":indexj, "txt": placename[indexi] + " to " +  placename[indexj] + ":" + Number(pushitem)/1000 + "km" + "-----"});
    });

}



</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIlgABKI1bK5mV8qIdqSFYAdsGNCLj9-o&libraries=places"></script>
</body>
</html>