<?
list($dRoot,$bf) = explode('ekoda',$_SERVER["DOCUMENT_ROOT"]);
$dRoot = __DIR__."/";
//include($dRoot."/home/tes-sev/art-festival.net/public_html/_conf/conf.php");
include($dRoot."_conf/conf.php");
//echo "<pre>".$gmKey;
//var_dump($_SERVER);

?><!DOCTYPE html>
<html lang="ja">
  <head>
    <style>
      #maps{ height: 400px; }
    </style>
  </head>
  <body>
  <div id="maps"></div>
  <script src="//maps.googleapis.com/maps/api/js?key=<?=$gmKey?>&callback=initMap" async></script>
  <script>
    function initMap() {
      var mapPosition = {lat:35.170662, lng:136.923430};
      var mapArea = document.getElementById('maps');
      var mapOptions = {
        center: mapPosition,
        zoom: 16,
      };
      var map = new google.maps.Map(mapArea, mapOptions);

      // ↓↓↓ 当記事ではここから解説 ↓↓↓
      var markerOptions = {
        map: map,
        position: mapPosition,
      };
      var marker = new google.maps.Marker(markerOptions);
      // ↑↑↑ 当記事ではここまで解説 ↑↑↑
    }
  </script>
  </body>
</html>
