<!DOCTYPE html>
<html>
  <head>
    <title>Info Windows</title>
    <link rel="stylesheet" type="text/css" href="" />

    <style>
#map {
      width: 100%;
      height: 400px;	
      /*
      border: 0px solid #930;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      background: 			#47332C;
*/
    </style>
  </head>
  <body>
    
<div data-role="page" id="map_gaige" style="height:400px;">
  <div id="map"></div> 
</div>
<?
list($dRoot,$bf) = explode('ecoda',$_SERVER["DOCUMENT_ROOT"]);
//include($dRoot."/home/tes-sev/art-festival.net/public_html/_conf/conf.php");
echo $dRoot;
include($dRoot."/_conf/conf.php");

//var_dump($_SERVER);

?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
<link rel="stylesheet" href="css/s.css" />

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=<?=$googleMapApiKey?>"></script>
<!--
    &callback=initMap&sensor=true
util.js:229 Google Maps JavaScript API warning: SensorNotRequired https://developers.google.com/maps/documentation/javascript/error-messages#sensor-not-requir

    -->

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
function j(u){
location.href="/s.php?i="+u+"&l="+1+"#shop_detail";
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






            marker0 = new google.maps.Marker(
           {

            title: 'インド定食 ターリー屋 江古田店', //配置するマーカーの名前
            position: new google.maps.LatLng(35.737167,139.672422),
			content: "<img src='./images/i/restaurant.gif' alt='レストラン' title='レストラン' border=0 align=absmiddle><a href='/s.php?i=7802&l=1'>[インド定食 ターリー屋 江古田店]</a><br /><img src='./images/i/vege_type.gif' width=16 height=16 alt='Veggie Type' align=absmiddle> ベジ＆ノン・ベジ<br /><img src='./images/i/phone.gif' width=16 height=16 alt='phone' align=absmiddle><a href='tel:03-6908-0321'>03-6908-0321</a><hr size=1 color=#D2FFB5 /><img src='./images/i/shop.gif' width=16 height=16 align=absmiddle> <a href='.//s.php?l=1&pref_id=13' class=aw target=_blank>東京都</a><a href='.//s.php?m=s&ward=20&l=1' class=aw target=_blank>練馬区</a>旭丘1-77-2 <br /><img src='./images/i/train.gif' width=16 height=16 alt='train' align=absmiddle> <a href='.//s.php?m=s&train_id=6&l=1' class=aw target=_parent>西武池袋線</a>  <a href='.//s.php?m=v&s=204&l=1' class=aw target=_parent>江古田駅</a> <hr size=1 color=#D2FFB5 />インド料理、カレー&nbsp;<img src='./images/i/lunch_box.gif' alt='弁当販売' title='弁当販売' align=absmiddle><img src='./images/c/clear.gif' width=2 height=15 align=absmiddle><img src='./images/i/take_out.gif' alt='テイクアウト' title='テイクアウト' align=absmiddle>&nbsp;",

            map: map,
            icon:mappointAry['i5']
            }
            );
			attachMessage(marker0, marker0.content);



            marker1 = new google.maps.Marker(
           {

            title: 'KO-SO CAFE BIORISE(コウソウカフェ)', //配置するマーカーの名前
            position: new google.maps.LatLng(35.648888,139.709977),
			content: "<img src='./images/i/cafe.gif' title='カフェ' alt='レストラン' border=0 align=absmiddle><img src='./images/i/restaurant.gif' title='レストラン' alt='カフェ' border=0 align=absmiddle><a href='/s.php?i=7801&l=1'>[KO-SO CAFE BIORISE(コウソウカフェ)]</a><br /><img src='./images/i/vege_type.gif' width=16 height=16 alt='Veggie Type' align=absmiddle> all vegan<br /><img src='./images/i/phone.gif' width=16 height=16 alt='phone' align=absmiddle><a href='tel:03-3409-3405'>03-3409-3405</a><hr size=1 color=#D2FFB5 /><img src='./images/i/shop.gif' width=16 height=16 align=absmiddle> <a href='.//s.php?l=1&pref_id=13' class=aw target=_blank>東京都</a><a href='.//s.php?m=s&ward=10&l=1' class=aw target=_blank>渋谷区</a>東3-25-3<br /><img src='./images/i/train.gif' width=16 height=16 alt='train' align=absmiddle> <a href='.//s.php?m=s&train_id=1&l=1' class=aw target=_parent>山手線</a>  <a href='.//s.php?m=v&s=10&l=1' class=aw target=_parent>恵比寿駅</a> <hr size=1 color=#D2FFB5 />VEGAN料理、カレー、パスタ、コーヒー、野菜ジュース&nbsp;<img src='./images/i/sweets.gif' alt='ベジスイーツ 販売' title='ベジスイーツ 販売' align=absmiddle><img src='./images/c/clear.gif' width=3 height=1 border=0 align=absmiddle><img src='./images/i/wine.gif' title='酒類が充実' alt='酒類が充実' align=absmiddle>&nbsp;",

            map: map,
            icon:mappointAry['i81']
            }
            );
			attachMessage(marker1, marker1.content);



            marker2 = new google.maps.Marker(
           {

            title: '晴れ屋 GAIYA御茶ノ水店', //配置するマーカーの名前
            position: new google.maps.LatLng(35.696231,139.764131),
			content: "<img src='./images/i/cafe.gif' title='カフェ' alt='レストラン' border=0 align=absmiddle><img src='./images/i/restaurant.gif' title='レストラン' alt='カフェ' border=0 align=absmiddle><a href='/s.php?i=7800&l=1'>[晴れ屋 GAIYA御茶ノ水店]</a><br /><img src='./images/i/vege_type.gif' width=16 height=16 alt='Veggie Type' align=absmiddle> <br /><img src='./images/i/phone.gif' width=16 height=16 alt='phone' align=absmiddle><a href='tel:03-3219-4865'>03-3219-4865</a><hr size=1 color=#D2FFB5 /><img src='./images/i/shop.gif' width=16 height=16 align=absmiddle> <a href='.//s.php?l=1&pref_id=13' class=aw target=_blank>東京都</a><a href='.//s.php?m=s&ward=16&l=1' class=aw target=_blank>千代田区</a>神田駿河台3-3-13<br /><img src='./images/i/train.gif' width=16 height=16 alt='train' align=absmiddle> <a href='.//s.php?m=s&train_id=2&l=1' class=aw target=_parent>中央線</a>  <a href='.//s.php?m=v&s=32&l=1' class=aw target=_parent>御茶ノ水駅</a> <hr size=1 color=#D2FFB5 />マクロビオティック&nbsp;&nbsp;",

            map: map,
            icon:mappointAry['i8']
            }
            );
			attachMessage(marker2, marker2.content);




          map.setCenter(latLng);

          infowindow.open(map);
        });
      });



</script>

<script type="text/javascript" src="https://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

<!------------------------------------------------------------------------------------------------------------------  SHOP DETAIL end-->










</body>
</html>