
<script>


var is_tate =true;
var orient = window.onorientation;
if(Math.abs(window.orientation) === 0){
    //alert("縦向き");
    //is_tate ='';
} else {
    //alert("横向き");
    is_tate =false;
}
mappointAry= new Array();
for(i=1;i<100;i++){
	mappointAry['i'+i]='/images/mappoint/restaurant.png';
}
/*
mappointAry['i1']='http://art-festival.net/2.jpg';
mappointAry['i3']='http://art-festival.net/2.jpg';
mappointAry['i4']='http://art-festival.net/2.jpg';
mappointAry['i5']='http://art-festival.net/2.jpg';
mappointAry['i6']='http://art-festival.net/2.jpg';
mappointAry['i8']='http://art-festival.net/2.jpg';
mappointAry['i9']='http://art-festival.net/2.jpg';
mappointAry['i18']='http://art-festival.net/2.jpg';
mappointAry['i22']='http://art-festival.net/2.jpg';
mappointAry['i48']='http://art-festival.net/2.jpg';
mappointAry['i17']='http://art-festival.net/2.jpg';
mappointAry['i18']='http://art-festival.net/2.jpg';
mappointAry['i19']='http://art-festival.net/2.jpg';
mappointAry['i21']='http://art-festival.net/2.jpg';
mappointAry['i25']='http://art-festival.net/2.jpg';
mappointAry['i35']='http://art-festival.net/2.jpg';
mappointAry['i28']='http://art-festival.net/2.jpg';
mappointAry['i43']='http://art-festival.net/2.jpg';
mappointAry['i27']='http://art-festival.net/2.jpg';
mappointAry['i39']='http://art-festival.net/2.jpg';
mappointAry['i44']='http://art-festival.net/2.jpg';
mappointAry['i46']='http://art-festival.net/2.jpg';
mappointAry['i45']='http://art-festival.net/2.jpg';
mappointAry['i49']='http://art-festival.net/2.jpg';
mappointAry['i50']='http://art-festival.net/2.jpg';
mappointAry['i51']='http://art-festival.net/2.jpg';
mappointAry['i52']='http://art-festival.net/2.jpg';
mappointAry['i53']='http://art-festival.net/2.jpg';
mappointAry['i55']='http://art-festival.net/2.jpg';
mappointAry['i57']='http://art-festival.net/2.jpg';
mappointAry['i63']='http://art-festival.net/2.jpg';
mappointAry['i71']='http://art-festival.net/2.jpg';
mappointAry['i72']='http://art-festival.net/2.jpg';
mappointAry['i81']='http://art-festival.net/2.jpg';
mappointAry['i82']='http://art-festival.net/2.jpg';

mappointAry['i99']='/images/mappoint/lunch_box.png';
mappointAry['i1004']='/images/mappoint/cooking_class.png';
mappointAry['i1008']='/images/mappoint/catering.png';
*/

mappointAry['i1']='/images/mappoint/Buddhist.png';
mappointAry['i3']='/images/mappoint/Japan.png';
mappointAry['i4']='/images/mappoint/chinese.png';
mappointAry['i5']='/images/mappoint/curry.png';
mappointAry['i6']='/images/mappoint/Euro.png';
mappointAry['i8']='/images/mappoint/macrobi.png';
mappointAry['i9']='/images/mappoint/cafe.png';
mappointAry['i18']='/images/mappoint/sweets.png';
mappointAry['i22']='/images/mappoint/bread.png';
mappointAry['i48']='/images/mappoint/cafe.png';
mappointAry['i17']='/images/mappoint/sweets.png';
mappointAry['i18']='/images/mappoint/sweets.png';
mappointAry['i19']='/images/mappoint/chinese.png';
mappointAry['i21']='/images/mappoint/organic.png';
mappointAry['i25']='/images/mappoint/hotel.png';
mappointAry['i35']='/images/mappoint/rawfood.png';
mappointAry['i28']='/images/mappoint/Italian.png';
mappointAry['i43']='/images/mappoint/Spanish.png';
mappointAry['i27']='/images/mappoint/middle_east.png';
mappointAry['i39']='/images/mappoint/hamburger.png';
mappointAry['i44']='/images/mappoint/middle_east.png';
mappointAry['i46']='/images/mappoint/curry.png';
mappointAry['i45']='/images/mappoint/ramen.png';
mappointAry['i49']='/images/mappoint/bread.png';
mappointAry['i50']='/images/mappoint/middle_east.png';
mappointAry['i51']='/images/mappoint/africa.png';
mappointAry['i52']='/images/mappoint/Euro.png';
mappointAry['i53']='/images/mappoint/middle_east.png';
mappointAry['i55']='/images/mappoint/gyouza.png';
mappointAry['i57']='/images/mappoint/curry.png';
mappointAry['i63']='/images/mappoint/Thai.png';
mappointAry['i71']='/images/mappoint/bread.png';
mappointAry['i72']='/images/mappoint/bread.png';
mappointAry['i81']='/images/mappoint/vegan.png';
mappointAry['i82']='/images/mappoint/British.png';

mappointAry['i99']='/images/mappoint/lunch_box.png';
mappointAry['i1004']='/images/mappoint/cooking_class.png';
mappointAry['i1008']='/images/mappoint/catering.png';


$(function(){

	$('#start_gps').click(function(){
		navigator.geolocation.watchPosition(
			function(position){
				$('#latitude').html(position.coords.latitude); //緯度
				$('#longitude').html(position.coords.longitude); //経度<a href="javascript:setUrl(1);">Tap!</a>
				//GoogleMapLOAD
				if (GBrowserIsCompatible()) {
					var map = new GMap2(document.getElementById("map"));
					map.addControl(new GLargeMapControl());

					map.addControl(new GMapTypeControl());

					var latlng = new GLatLng(position.coords.latitude,position.coords.longitude);
					map.setCenter(latlng, 15, G_NORMAL_MAP);

					var marker = new GMarker(latlng);
					map.addOverlay(marker);

					GEvent.addListener(map,'click',function(overlay, point){
						if(point){

							document.getElementById('latitude').value = point.y;
							document.getElementById('longitude').value = point.x;

						}
					});
				}
			}
		);
	});
});



      // Google Map API
  function attachMessage(marker, msg) {
    google.maps.event.addListener(marker, 'click', function(event) {
      new google.maps.InfoWindow({
        content: msg
      }).open(marker.getMap(), marker);
    });
  }



      // Google Map API 
  function attachMessage(marker, msg) {
    google.maps.event.addListener(marker, 'click', function(event) {
      new google.maps.InfoWindow({
        content: msg
      }).open(marker.getMap(), marker);
    });
  }
var markers = new Array();
function j(u){
location.href="/shops?i="+u+"&l="+1+"#shop_detail";
}
      var image = "map_point2.gif";
      $(document).ready(function(){
        $('#map_gaige').bind('pageshow', function(){
          //地図作成
          var target = document.getElementById('map'),
          infowindow = new google.maps.InfoWindow(target),
//          latLng = new google.maps.LatLng(35.658735,139.701633), //地図の中心の緯度,経度
          latLng = new google.maps.LatLng(35.73755766125765,139.67280385604457), //地図の中心の緯度,経度
          
          //地図の中心の緯度,経度
          map = new google.maps.Map(target, {
            zoom: 16, //ズーム率
            mapTypeId: google.maps.MapTypeId.ROADMAP}),



<?php
/*
    ["lng"]=>
    string(8) "35.73623"
    [9]=>
    string(8) "35.73623"
*/
$len = 0;
foreach($shopDataAry as $i => $data){
  $len++;
?>

      marker<?php echo $i;?> = new google.maps.Marker(
           {

            title: '<?php echo $i;?>||<?php echo $data["pname"];?><?php echo $data["branch_name_ja"];?>', //配置するマーカーの名前
            position: new google.maps.LatLng(<?php echo $data["lng"];?>,<?php echo $data["lat"];?>),
			content: "<a href='/shops/?i=<?php echo $data["id"];?>&l=1' target=_blank>[<?php echo $data["pname"];?><?php echo $data["branch_name_ja"];?>]</a>",

            map: map,
            icon:mappointAry['i5']
            }
            );
			attachMessage(marker<?php echo $i;?>, marker<?php echo $i;?>.content);
      markers[<?php echo $i;?>] = marker<?php echo $i;?>;
      
<?php 

}
?>

          map.setCenter(latLng);
          //closeInfoWindow(<?php echo $i;?>,map);

          infowindow.open(map);
        });
      });
function closeInfoWindow(len,map){alert(len);
  
//   
//  marker1.infowindow.close();

  for(i=0;i<len;i++){
    eval("var tmarker = 'marker'+ i ;");
    //  eval("var 'marker'+i;");
    infowindow.close();
  }
  
}

</script>

<script type="text/javascript" src="https://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

<!------------------------------------------------------------------------------------------------------------------  SHOP DETAIL end-->










</body>
</html>