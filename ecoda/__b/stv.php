<!DOCTYPE html>
<html>
<head>
    <title>Sample</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
 
        #street-view {
            height: 100%;
        }
    </style>
</head>
<body>
 
<div id="street-view"></div>
 
<script>
/*

          array(2) {
            ["lat"]=>
            float(35.738016680291)
            ["lng"]=>
            float(139.66563708029)
          }
          ["southwest"]=>
          array(2) {
            ["lat"]=>
            float(35.735318719708)
            ["lng"]=>
            float(139.66293911971)

*/
    const LIMIT = 30; // 移動回数の上限値
    const WAIT_SECOND = 2; // 次に移動するまでの秒数
    const START_LAT_LNG = {lat: 35.738016680291, lng: 139.66563708029}; // 開始地点の緯度、経度
    const START_HEADING = 180; // 開始時の方角
    let panorama;
 
    // GoogleMapApi 読み込み時にcallbackで呼び出される
    function initMap() {
        let Links, count = 0, timer_id;
 
        // ストリートビューの表示
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'), {
                position: START_LAT_LNG,
                pov: {
                    heading: START_HEADING,
                    pitch: 0
                },
                zoom: 1
            }); // 
 
        // 画面内のリンクを取得
        Links = panorama.getLinks();
 
        // ストリートビューの状態が変更されるたびに実行される
        google.maps.event.addListener(panorama, 'status_changed', function () { // 
            if (panorama.getStatus() == "OK") {
                Links = panorama.getLinks();
 
                if (count > LIMIT) {
                    alert('stop');
                    return false;
                }
 
                setTimeout(
                    function () {
                        let target = 0;
                        if (Links.length >= 4) {
                            target = Math.floor(Math.random() * Links.length); // ランダムで選択
                        } else {
                            //現在向ている方向に近いlinkを選択
                            let val = 360;
                            let currentPov = panorama.getPov();
                            Links.forEach(function (element, index) {
                                let ans = Math.abs(currentPov.heading - element.heading);
                                if (val > ans) {
                                    val = ans;
                                    target = index;
                                }
                            });
                        }
                        // 次に移動するLink先に向きを変える
                        panorama.setPov({
                            heading: Links[target].heading,
                            pitch: 0
                        });
                        // 次のストリートビューに移動する
                        panorama.setPano(Links[target]['pano']);
                        count++;
                    },
                    WAIT_SECOND * 1000
                );
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key="AIzaSyAggf8U8GSsAEVh7jfUIMZmx45Bd55EQso"&callback=initMap"
        async defer></script>
</body>
</html>