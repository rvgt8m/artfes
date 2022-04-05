<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
<!link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
    mappointAry['i'+i]='http://www.art-festival.net/images/map/9379.png';
}

mappointAry['i1']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i3']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i4']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i5']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i6']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i8']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i9']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i18']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i22']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i48']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i17']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i18']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i19']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i21']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i25']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i35']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i28']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i43']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i27']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i39']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i44']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i46']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i45']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i49']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i50']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i51']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i52']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i53']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i55']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i57']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i63']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i71']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i72']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i81']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i82']='http://www.art-festival.net/images/map/9379.png';

mappointAry['i99']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i1004']='http://www.art-festival.net/images/map/9379.png';
mappointAry['i1008']='http://www.art-festival.net/images/map/9379.png';

function setUrl(m){
    var sah = $(window).height();
    var saw = $(window).width();
    var sw = $(window).width();//window.innerWidtht;
    var sh = $(window).height();//window.innerHeight;
    if(is_tate==false){
        sh = $(window).height();//window.innerWidtht;
        sw = $(window).width();//window.innerHeight;
        sah = $(window).width();
        saw = $(window).height();
    }
    LatVal = document.getElementById('latitude').innerHTML;
    LngVal = document.getElementById('longitude').innerHTML;

    $(document).ready(function(){
        location.href="/s.php?l=1&LatVal="+LatVal+"&LngVal="+LngVal+"&w="+m+"&sah="+sah+"&saw="+saw+"&sh="+sh+"&sah="+sah+"#near_you_veggie_spot";
    });
}

function setVMUrl(m){

var sah = $(window).height();
var saw = $(window).width();
var sw = window.innerWidtht;
var sh = window.innerHeight;
if(is_tate==false){
    sh = window.innerWidtht;
    sw = window.innerHeight;
    sah = $(window).width();
    saw = $(window).height();
}
location.href="/s.php?l=1&"+m+"_vege_map&sah="+sah+"&saw="+saw+"&sh="+sah+"&sw="+saw+"#near_you_veggie_spot";
}


$(function(){

    $('#start_gps').click(function(){
        navigator.geolocation.watchPosition(
            function(position){
                $('#latitude').html(position.coords.latitude); //緯度
                $('#longitude').html(position.coords.longitude); //経度<a href="javascript:setUrl(1);">Tap!</a>
                $('#near_map_link').html('<div align="center"><button type="submit" data-theme="a" onclick="setUrl(1);">Tap!</button></div>');
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


// Google Map APIa     
      
///////////////////////////

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
$('#near_you_veggie_spot').bind('pageshow', function(){
    //地図作成
    var target = document.getElementById('map'),
    infowindow = new google.maps.InfoWindow(target),
    latLng = new google.maps.LatLng(35.658735,139.701633), //地図の中心の緯度,経度
    //地図の中心の緯度,経度
    map = new google.maps.Map(target, {
    zoom: 14, //ズーム率
    mapTypeId: google.maps.MapTypeId.ROADMAP}),
            
    marker0 = new google.maps.Marker(
        {

            title: 'インド定食 ターリー屋 江古田店', //配置するマーカーの名前
            position: new google.maps.LatLng(35.737167,139.672422),
            content: "<a href='/s.php?i=7802&l=1'>[インド定食 ターリー屋 江古田店]</a><br /> ベジ＆ノン・ベジ<br /><a href='tel:03-6908-0321'>03-6908-0321</a><hr size=1 color=#D2FFB5 /><a href='.//s.php?l=1&pref_id=13' class=aw target=_blank>東京都</a><a href='.//s.php?m=s&ward=20&l=1' class=aw target=_blank>練馬区</a>旭丘1-77-2 <br /> <a href='.//s.php?m=s&train_id=6&l=1' class=aw target=_parent>西武池袋線</a><a href='.//s.php?m=v&s=204&l=1' class=aw target=_parent>江古田駅</a> <hr size=1 color=#D2FFB5 />",

            map: map,
            icon:mappointAry['i5']
            }
        );
        attachMessage(marker0, marker0.content);


   /*
            marker375 = new google.maps.Marker(
           {

            title: 'ナタラジ 銀座店', //配置するマーカーの名前
            position: new google.maps.LatLng(35.6702,139.763735),
            content: "<img src='./images/i/restaurant.gif' alt='レストラン' title='レストラン' border=0 align=absmiddle><a href='/s.php?i=1&l=1'>[ナタラジ 銀座店]</a><br /><img src='./images/i/vege_type.gif' width=16 height=16 alt='Veggie Type' align=absmiddle> Lacto Ovo<img src='./images/c/plusVegan.gif' width=35 height=10 align=absmiddle><br /><img src='./images/i/phone.gif' width=16 height=16 alt='phone' align=absmiddle><a href='tel:03-5537-1515'>03-5537-1515</a><hr size=1 color=#D2FFB5 /><img src='./images/i/shop.gif' width=16 height=16 align=absmiddle> <a href='.//s.php?l=1&pref_id=13' class=aw target=_blank>東京都</a><a href='.//s.php?m=s&ward=17&l=1' class=aw target=_blank>中央区</a>銀座6-9-4　銀座小坂ビル7～9F  地下鉄　銀座駅　A2出口<br /><img src='./images/i/train.gif' width=16 height=16 alt='train' align=absmiddle> <a href='.//s.php?m=s&train_id=13&l=1' class=aw target=_parent>銀座線</a>  <a href='.//s.php?m=v&s=398&l=1' class=aw target=_parent>銀座駅</a> <hr size=1 color=#D2FFB5 />インド料理&nbsp;<img src='./images/i/party.gif' alt='パーティ/イベント使用可' title='パーティ/イベント使用可' align=absmiddle><img src='./images/c/clear.gif' width=2 height=16 align=absmiddle><img src='./images/c/clear.gif' width=3 height=1 border=0 align=absmiddle><img src='./images/i/wine.gif' title='酒類が充実' alt='酒類が充実' align=absmiddle>&nbsp;",

            map: map,
            icon:mappointAry['i5']
            }
            );
            attachMessage(marker375, marker375.content);
            */

          map.setCenter(latLng);

          infowindow.open(map);
        });
      });



</script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<style>
#map {
    width: 100%;
    height: 1440px; border: 0px solid #930;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background:             #47332C;
}
</style>

<!------------------------------------------------------------------------------------------------------------------  SHOP DETAIL end-->








<div data-role="page" id="near_you_veggie_spot" data-theme="c" data-add-back-btn="true">
  <div id="map"></div> 
</div>
</body>
</html>