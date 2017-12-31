<html>
    <!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<style>
 body {
    background: url("map.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding-top: 40px;
  }
  #googleMap {
    position: absolute;
    top: 55px;
    left: 55%;
    width: 600px;
    height: 550px;
  }
  #getlocbutton {
    position: fixed;
    left: 49%;
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
.photoblock{
  display: none;
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
  left: 12%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper2 {
  position: absolute;
  top: 67%;
  left: 12%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper3 {
  position: absolute;
  top: 74%;
  left: 12%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper4 {
  position: absolute;
  top: 81%;
  left: 12%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrapper5 {
  position: absolute;
  top: 88%;
  left: 12%;
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
<!--search: <input type="text" name="FirstName" id = search value="請輸入查詢字串"><br><button onclick="myMap('none')">搜尋</button>-->
<div id="photoblock" style="display:none">
  <a id="detail_url" href ="https://www.google.com.tw/search?q=" target="_blank"><img id="ph1" width= "450" height="300"></img></a>
</div>

<div id = "VDO" style=" position: absolute;left: 5%;top: 350px; display: none;">
<video width="400" height="280" controls preload="auto" id = "vid">
<source src="S.mp4" type="video/mp4">
</video>
</div>

<div id = "w1" class = "wrapper1" style="display:none">
        <strong><div id = "choose0" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap('0')"><strong></div>
</div>
<div id = "w2" class = "wrapper2" style="display:none">
        <div id = "choose1" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap('1')"><strong></div>
</div>
<div id = "w3" class = "wrapper3" style="display:none">
        <div id = "choose2" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap('2')"><strong></div>
</div>
<div id = "w4" class = "wrapper4" style="display:none">
        <div id = "choose3" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap('3')"><strong></div>
</div>
<div id = "w5" class = "wrapper5" style="display:none">
        <div id = "choose4" class="btn btn--border btn--primary btn--animated" text="" onclick="myMap('4')"><strong></div>
</div>
<div id="googleMap"></div>
<div id = "getlocbutton" class = "wrapper">
        <div class="btn btn--border btn--primary btn--animated" onclick = "getLocation()"><strong>取得所在地</div>
</div>
<?php
  $file_content = file_get_contents("recipe.txt");
?>
<script>
var BLD = '<?php echo $file_content ;?>';
var myMap_cnt = 0;
var lAT;
var lNG;
var searchURL = "https://www.google.com.tw/search?q=";
var gallery = []; 
var gallery2 = []; //store meal photo
var tmpresult = [];
var placename = []; //place name 
var coordinate_rest = []; //lat & lng
var distanceArr = [];
var distanceArr2 = [];
var requestArr = [];
var meal = [];
var repspot = [];
var readcount=0;
var resultcnt=0;
//var breakfast = "牛肉湯";
//var lunch = "水餃";
//var dinner = "燒烤";
//console.log(breakfast);
//console.log(lunch);
//console.log(dinner);
BLD = BLD.split("|");
var breakfast = BLD[0];
var lunch = BLD[1];
var dinner = BLD[2];
function getLocation() {
    document.getElementById("photoblock").style.display = "";
    document.getElementById("w1").style.display = "";
    document.getElementById("w2").style.display = "";
    document.getElementById("w3").style.display = "";
    document.getElementById("w4").style.display = "";
    document.getElementById("w5").style.display = "";
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getPosition);
    } else { 
        alert() = "Geolocation is not supported by this browser.";
    }
    document.getElementById("choose4").innerHTML = results[4].name;
}
function getPosition(position){
    lAT = position.coords.latitude;
    lNG = position.coords.longitude;
    alert(lAT +"經緯"+lNG);
    console.log(lunch);
    myMap('none');
    document.getElementById("getlocbutton").style.visibility = "hidden";
}



function createMarker(place,map, tmploc, id_photo, place_str) {
        var infowindow;
        infowindow = new google.maps.InfoWindow();
        if(tmploc == 0) var placeLoc = place.geometry.location;
        else var placeLoc = tmploc;
        var marker = new google.maps.Marker({
          map: map,
          position: placeLoc
        });
        google.maps.event.addListener(marker, 'click', function() {
          if(tmploc == 0)infowindow.setContent(place.name);
          else infowindow.setContent(place_str);
          infowindow.open(map, this);
          var flaggg=0;
          for(var i=0; i<10; i++){
            if(tmploc===0 && placename[i]==place.name){
              document.getElementById("ph1").src = gallery[i];
              document.getElementById("detail_url").href = searchURL + placename[i];
              flaggg=1;
            }
            else if(placename[i]==place){
              document.getElementById("ph1").src = gallery[i];
              document.getElementById("detail_url").href = searchURL + place;
              flaggg=1;
            }
          }
          if(flaggg===0){
            if(Number(id_photo) < 3){
              document.getElementById("ph1").src = gallery2[Number(id_photo)];
              document.getElementById("detail_url").href = searchURL + place;
            }   
          }
        });
}





function myMap(button_id){
  //if(button_id != "none") {
  //  meal.push(document.getElementById(button_id).innerHTML);
  //}
  var vid = document.getElementById("vid");
  myMap_cnt++;
  var local = new google.maps.LatLng(parseFloat(lAT), parseFloat(lNG));
  switch(myMap_cnt){
    case 1:
      var search_text = breakfast;
      break;
    case 2:
      var search_text = lunch;
      break;
    case 3:
      var search_text = dinner;
      break;
    default:
      var search_text = "景點";
      //button change here
      document.getElementById("choose0").style.visibility = "hidden";
      document.getElementById("choose1").style.visibility = "hidden";
      document.getElementById("choose2").style.visibility = "hidden";
      document.getElementById("choose3").style.visibility = "hidden";
      document.getElementById("choose4").style.visibility = "hidden";
      //document.getElementById("photoblock").style.display = "none"
      document.getElementById("VDO").style.display = "";
      var vid = document.getElementById("vid");
      vid.play();
      break;
  }
  if(button_id!="none")gallery2.push(gallery[Number(button_id)]);
  gallery = []; 
  
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
  
  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
      }
      
      results.sort(function(a,b){return b.rating - a.rating;});
      if(button_id!="none"){
          meal.push({lat:coordinate_rest[Number(button_id)].lat, lng:coordinate_rest[Number(button_id)].lng, name:placename[Number(button_id)]});
      }
      
      placename = []; //place name 
      coordinate_rest = []; //lat & lng
      for(var j = 0; j < 10; j++){
        createMarker(results[j], map, 0, 5, "none");
        createPhotoMarker(results[j],j);
        //alert(results[j].name + " " + results[j].rating);
        console.log(results[j].name + " " + results[j].rating);
        coordinate_rest.push({lat:results[j].geometry.location.lat(), lng:results[j].geometry.location.lng()});
        placename.push(results[j].name);
        
      }
      document.getElementById("ph1").src = gallery[0];
      document.getElementById("choose0").innerHTML = results[0].name;
      document.getElementById("choose1").innerHTML = results[1].name;
      document.getElementById("choose2").innerHTML = results[2].name;
      document.getElementById("choose3").innerHTML = results[3].name;
      document.getElementById("choose4").innerHTML = results[4].name;
      if(myMap_cnt === 4){
        console.log(distanceArr);
        calcRoute();
      }
      console.log(meal);
      console.log(placename);
    }
  }
}
function createPhotoMarker(place,count){
  var photoshow = place.photos;
  if (!photoshow) {
    return;
  }
  gallery[count] = photoshow[0].getUrl({'maxWidth': 600, 'maxHeight': 400});
}
function doCalulationAndResult(){
  var rvsArr = [];
  var resultLoc = [];
  var resultLoc2 = [];
  for(var i= 1; i<46; i++){
    rvsArr.push({dis: distanceArr[i].dis, indexi: distanceArr[i].indexj, indexj: distanceArr[i].indexi});
  }
  console.log(distanceArr);
  distanceArr2 = (distanceArr.slice(1,46)).concat(distanceArr.slice(46,56)).concat(rvsArr.slice(0)).concat(distanceArr.slice(66,76));
  console.log(distanceArr2);
  dp_javascript(meal[0].name, meal[1].name);
  distanceArr2 = [];
  distanceArr2 = (distanceArr.slice(1,46)).concat(distanceArr.slice(56,66)).concat(rvsArr.slice(0)).concat(distanceArr.slice(76,86));
  //console.log(repspot);
  resultLoc = repspot.reverse();
  for(var i=0; i<distanceArr2.length; i++){
    if(distanceArr2[i].indexi === repspot[1] || distanceArr2[i].indexj === repspot[1] || distanceArr2[i].indexi === repspot[2] || distanceArr2[i].indexj === repspot[2]){
      distanceArr2.splice(i,1);
      i--;
    }
  }
  //console.log(distanceArr2);
  dp_javascript(meal[1].name, meal[2].name);
  resultLoc2 = resultLoc.concat(repspot.reverse().splice(1));
  console.log(resultLoc2);
  //draw route calling 167th api
  var resultLoc3 = [];
  resultLoc3.push({
    location: meal[0].lat.toString() + ", " + meal[0].lng.toString(),
    stopover: true
  });
  for(var i=0; i<resultLoc2.length; i++){
    if(i === 0){
      ;
    }
    else if(i === 3){
      resultLoc3.push({
        location: meal[1].lat.toString() + ", " + meal[1].lng.toString(),
        stopover: true
      });
    }
    else if(i === 6){
      ;
    }
    else{
      for(var j = 0; j<placename.length; j++){
        if(resultLoc2[i] === placename[j]){
          resultLoc3.push({
            location: coordinate_rest[j].lat.toString() + ", " + coordinate_rest[j].lng.toString(),
            stopover: true
          });
        }
      }
    }
  }
  console.log(resultLoc3);
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
  var local = new google.maps.LatLng(parseFloat(lAT), parseFloat(lNG));
  var mapProp = new google.maps.Map(document.getElementById("googleMap"), {
    center: local,
    zoom: 15
  });
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  directionsDisplay.setMap(map);
  var req = {
        origin: lAT.toString() + ", " + lNG.toString(),
        destination: meal[2].lat.toString() + ", " + meal[2].lng.toString(),
        waypoints: resultLoc3,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        avoidHighways: true,
        avoidTolls: true
      };
  function gofindpath(req){
    directionsService.route(req, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        
        directionsDisplay.setDirections(response);
        directionsDisplay.setMap(map);
        
      }
      else {
        console.log("Directions failed: "+status);
        setTimeout(function(){
          gofindpath(req);
        }, 1000);
        
      }
    });
  }
  gofindpath(req);
  for(var i=0; i<7; i++){
    if(i == 0) {
      var tmploc = {lat:meal[0].lat, lng:meal[0].lng};
      createMarker(resultLoc2[i], map, tmploc, 0, "A: " + resultLoc2[i].toString());
    }
    else if(i == 6){
      var tmploc = {lat:meal[2].lat, lng:meal[2].lng};
      createMarker(resultLoc2[i], map, tmploc, 2, "G: " + resultLoc2[i].toString());
    }
    else if(i == 3){
      var tmploc = {lat:meal[1].lat, lng:meal[1].lng};
      createMarker(resultLoc2[i], map, tmploc, 1, "D: " + resultLoc2[i].toString());
    }
    else {
      for(var j = 0; j<placename.length; j++){
        if(resultLoc2[i] === placename[j]){
          var tmploc = {lat:coordinate_rest[j].lat, lng:coordinate_rest[j].lng}; 
          switch(i){
            case 1:
              createMarker(resultLoc2[i], map, tmploc, 5, "B: " + resultLoc2[i].toString());
              break;
            case 2:
              createMarker(resultLoc2[i], map, tmploc, 5, "C: " + resultLoc2[i].toString());
              break;
            case 4:
              createMarker(resultLoc2[i], map, tmploc, 5, "E: " + resultLoc2[i].toString());
              break;
            case 5:
              createMarker(resultLoc2[i], map, tmploc, 5, "F: " + resultLoc2[i].toString());
              break;
          }
          
        }
      }
    }
  }
}

function calcRoute() {
  //given 166 requests to the api
  var cnt=0;
  requestArr = [];
  //requests from the starting point
  var start = lAT +","+ lNG;
  var end = meal[0].lat + "," +meal[0].lng;
  var req = {
    origin: start,
    destination: end,
    travelMode: google.maps.DirectionsTravelMode.DRIVING,
    avoidHighways: true,
    avoidTolls: true
  };
  requestArr.push({"indexi":"起始", "indexj":meal[0].name, "request":req});
  //requests from spots
  for(var i=0; i<10; i++){
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
      requestArr.push({"indexi":placename[i], "indexj":placename[j], "request":req});
      
      cnt++;
     
    }
  }
  //requests from meal points to spots vice versa(single direction)
  for(var i=0; i<2; i++){
    for(var j=0; j<10; j++){
      //106~120: b to spot
      //121~135: l to spot
      var start = meal[i].lat.toString() +","+ meal[i].lng.toString();
      var end = coordinate_rest[j].lat.toString() +","+ coordinate_rest[j].lng.toString();
      var req = {
        origin: start,
        destination: end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        avoidHighways: true,
        avoidTolls: true
      };
      requestArr.push({"indexi":meal[i].name, "indexj":placename[j], "request":req});
    }
  }
  for(var i=1; i<3; i++){
    for(var j=0; j<10; j++){
      //136~150: spot to l
      //151~165: spot to d  
      var start = coordinate_rest[j].lat.toString() +","+ coordinate_rest[j].lng.toString();
      var end = meal[i].lat.toString() +","+ meal[i].lng.toString();
      var req = {
        origin: start,
        destination: end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
        avoidHighways: true,
        avoidTolls: true
      };
      requestArr.push({"indexi":placename[j], "indexj":meal[i].name, "request":req});
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
var failure = false;
function processRequests(){
  var i=0;
  var delay = 200;
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
        delay = 200;
      }
      else { 
        console.log("Directions failed: "+status);
        --i;
        delay+=1000;
        failure = true;
      }
    });
    setTimeout(function(){
      nextRequest(doCalulationAndResult);
    }, delay);
  }
  function nextRequest(cb){
    i++;
    if(i >= requestArr.length && failure === false){
      //pauseBrowser(1000);
      cb & cb();
      return;
    }
    submitRequest(requestArr[i].indexi, requestArr[i].indexj,function(indexi, indexj, pushitem){
      console.log(indexi + "," + indexj + "," + pushitem + "XXX");
        distanceArr.push({"dis":Number(pushitem), "indexi":indexi, "indexj":indexj, "txt": indexi + " to " +  indexj + ":" + Number(pushitem)/1000 + "km" + "-----"});
        failure = false;
    });
  }
  submitRequest(requestArr[i].indexi, requestArr[i].indexj,function(indexi, indexj, pushitem){
        distanceArr.push({"dis":Number(pushitem), "indexi":indexi, "indexj":indexj, "txt": indexi + " to " +  indexj + ":" + Number(pushitem)/1000 + "km" + "-----"});
        failure = false;
    });
}
function dp_javascript(source, dest){
  
  var d = [];
  
  //first relaxation
  //init
  //d[i][j] i!=j i1j1 i2j2
  for(var i=0; i<distanceArr2.length; i++){
    d[distanceArr2[i].indexi]= {};
    for(var j=0; j<distanceArr2.length; j++){
      if(distanceArr2[i].indexi != distanceArr2[j].indexj){
        d[distanceArr2[i].indexi][distanceArr2[j].indexj] = {};
        d[distanceArr2[i].indexi][distanceArr2[j].indexj][0] = 1e9;
        d[distanceArr2[i].indexi][distanceArr2[j].indexj][1] = 1e9;
        d[distanceArr2[i].indexi][distanceArr2[j].indexj][2] = 1e9;
      }
      
    }
  }
  var pathnode = {};
  d[dest] = {};
  for(var i=0; i<distanceArr2.length; i++){
    if(distanceArr2[i].indexi != dest){
      //console.log(distanceArr2[i].indexi + " , " + distanceArr2[i].indexj);
      //console.log(d);
      d[distanceArr2[i].indexi][distanceArr2[i].indexj][0] = distanceArr2[i].dis;
      pathnode[distanceArr2[i].indexj] = {};
      for(var j in d){
        pathnode[distanceArr2[i].indexj][j] = [];
        if(j === distanceArr2[i].indexi) pathnode[distanceArr2[i].indexj][j][0] = distanceArr2[i].indexi;
      }
      
    }
    
    //d[distanceArr2[i].indexj] = d[distanceArr2[i].indexi] + distanceArr2[i].dis;
    //parent[distanceArr2[i].indexj] = distanceArr2[i].indexi;
  }
  console.log(d);
  //second & third relaxation using dp
  var firstnode = {};
  var secondnode = {};
  var path = [];
  var cnt = 0;
  while(cnt<2){
    cnt++;
    for(var i in d){
      if(i === dest)continue;
      for(var j in d){
        if(i === j)continue;
        //console.log(i + j + k);
        for(var k in d){
          //console.log(d[k][j][0]);
          //console.log(k, j, cnt-1);
          if(j!= source && k != dest && k != i && k != j && d[k][j][cnt-1]!=1e9){
            //console.log(i + j + k);
            var temp = 9999999999;
            for(var m =0; m<distanceArr2.length; m++){
              if(distanceArr2[m].indexi === i && distanceArr2[m].indexj === k){
                temp = distanceArr2[m].dis;
                break;
              }
            }
            if(temp + d[k][j][cnt-1] < d[i][j][cnt]){
              d[i][j][cnt] = temp + d[k][j][cnt-1];
              if(cnt===1){
                pathnode[j][i][1] = [];
                while(pathnode[j][i][1].length!=0)pathnode[j][i][1].pop();
                pathnode[j][i][1].push(k);
                pathnode[j][i][1].push(i);
              }
              else{
                pathnode[j][i][2] = [];
                while(pathnode[j][i][2].length!=0)pathnode[j][i][2].pop();
                pathnode[j][i][2].push(j);
                pathnode[j][i][2].push.apply(pathnode[j][i][2], pathnode[j][k][1]);
                pathnode[j][i][2].push(i);
              }
            }
          }
        }
      }
    }
  }
  
  //console.log(d);
  //console.log(pathnode);
  
  //console.log(pathnode[dest][source][2]);
  repspot = pathnode[dest][source][2].slice(0);
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkGxPxd_rWZT2HMNk-SweFF6agqSNQiSI&libraries=places"></script>
</body>
</html>