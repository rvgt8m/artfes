<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";

require_once $DR."DAO/mst_categories.php";

$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
$MstCategories = new MstCategories();
$category = $MstCategories->getAll(ART_CATEGORIES);
//var_dump($category);

function getViewName($supporterData = array()){
  $viewName = null;
  if($supporterData['handle_ja'] != ''){
    $viewName = $supporterData['handle_ja'];
  }
  if($supporterData['name_ja'] != ''){
    $viewName = $supporterData['name_ja'];
  }
  return $viewName;
}
//echo $Session->ep($supporterData['handle_ja']);
//$Session->getViewName($supporterData);
//echo $supporterData['id'];
//echo "<pre>";var_dump($supporterData);echo "</pre>";
?>
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
  height: 100%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>

<table border=1 width=100%>
    <tr>
    <td colspan=5 align=right>
        <?= getViewName($supporterData)?>さんのマイページ | 
        <a href="../_logout">ログアウト</a>
    </td>
<tr>

<tr>
    <td>
        いいね/オファー
        <br />良いね、コメント機能
        <br />作者用新着良いね履歴、作品ごとの良いねコメント参照画面
        <br />集計機能
    </td>
    <td>
        <a href="../shops">お店登録</a>
        <br />新規追加フォーム＝＞確認画面＝＞登録実行
        <br />更新フォーム＝＞確認画面＝＞登録実行
        <br />座標
        <br />駅
        画像
        <br />★カテゴリ
        MAP
        スタッフ登録（ユーザ紐づけ）

    </td>
    <td>
        作品登録
        <br />★カテゴリ
        <br />新規追加フォーム＝＞確認画面＝＞登録実行
        <br />更新フォーム＝＞確認画面＝＞登録実行
    </td>
    <td>
        イベント登録
    </td>
    <td>
        活動登録
        <br />新規追加フォーム＝＞確認画面＝＞登録実行
        <br />更新フォーム＝＞確認画面＝＞登録実行
    </td>
<tr>
<tr>
    <td>
        いいね/オファー
        <br />良いね、コメント機能
        <br />作者用新着良いね履歴、作品ごとの良いねコメント参照画面
        <br />集計機能
    </td>
    <td>
        <a href="">サポーター</a>
        <br />自己紹介
        <br />更新フォーム＝＞確認画面＝＞登録実行
    </td>
    <td>

    </td>
    <td>
        
    </td>
    <td>

    </td>
<tr>
</table>



<table>
  <?php foreach($category as $data){?>
    <td>
      <?php echo $data['title'];?>
    </td>
  </tr>
<?php }?>
</table>
<pre>
カテゴリの要件
自由追加
複数選択
上位カテゴリ複数選択
英語
修正機能　修正で困る事、登録者の意図と違う可能性　事前通知する。一週間以内
</pre>
<div id="map"></div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&v=weekly"
  async
></script>
<script>
function initMap(): void {
  const map = new google.maps.Map(
    document.getElementById("map") as HTMLElement,
    {
      zoom: 3,
      center: { lat: -28.024, lng: 140.887 },
    }
  );

  const infoWindow = new google.maps.InfoWindow({
    content: "",
    disableAutoPan: true,
  });

  // Create an array of alphabetical characters used to label the markers.
  const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

  // Add some markers to the map.
  const markers = locations.map((position, i) => {
    const label = labels[i % labels.length];
    const marker = new google.maps.Marker({
      position,
      label,
    });

    // markers can only be keyboard focusable when they have click listeners
    // open info window when marker is clicked
    marker.addListener("click", () => {
      infoWindow.setContent(label);
      infoWindow.open(map, marker);
    });

    return marker;
  });

  // Add a marker clusterer to manage the markers.
  new MarkerClusterer({ markers, map });
}

const locations = [
  { lat: -31.56391, lng: 147.154312 },
  { lat: -33.718234, lng: 150.363181 },
  { lat: -33.727111, lng: 150.371124 },
  { lat: -33.848588, lng: 151.209834 },
  { lat: -33.851702, lng: 151.216968 },
  { lat: -34.671264, lng: 150.863657 },
  { lat: -35.304724, lng: 148.662905 },
  { lat: -36.817685, lng: 175.699196 },
  { lat: -36.828611, lng: 175.790222 },
  { lat: -37.75, lng: 145.116667 },
  { lat: -37.759859, lng: 145.128708 },
  { lat: -37.765015, lng: 145.133858 },
  { lat: -37.770104, lng: 145.143299 },
  { lat: -37.7737, lng: 145.145187 },
  { lat: -37.774785, lng: 145.137978 },
  { lat: -37.819616, lng: 144.968119 },
  { lat: -38.330766, lng: 144.695692 },
  { lat: -39.927193, lng: 175.053218 },
  { lat: -41.330162, lng: 174.865694 },
  { lat: -42.734358, lng: 147.439506 },
  { lat: -42.734358, lng: 147.501315 },
  { lat: -42.735258, lng: 147.438 },
  { lat: -43.999792, lng: 170.463352 },
];

</script>
