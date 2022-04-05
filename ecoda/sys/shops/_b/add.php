<?php

$DR = '/home/tes-sev/art-festival.net/public_html';


require_once $DR."/ekoda/DAO/Shops.php";
require_once $DR."/ekoda/sys/Session.php";




?>
7733333333333333333333

<?php
var_dump($_POST);
 if ($_POST['mode'] == '') { //緯度、経度、latitude、longitude

?>
店舗登録：情報入力
<form method="post" action="./?add" >
業者名
<input type="text" name ="pname" maxlength =50 value="<?= $_POST['pname']?>" /><hr />
業者名：英語
<input type="text" name ="pname_eng" maxlength =50 value="<?= $_POST['pname_eng']?>" /><hr />
支店名：日本語
<input type="text" name ="branch_name_ja" maxlength =50 value="<?= $_POST['branch_name_ja']?>" /><hr />
支店名：英語
<input type="text" name ="branch_name_eng" maxlength =50 value="<?= $_POST['branch_name_eng']?>" /><hr />
地図中央：緯度
<input type="text" name ="map_center_lat" maxlength =50 value="<?= $_POST['map_center_lat']?>" /><hr />
地図中央：経度
<input type="text" name ="map_center_lng" maxlength =50 value="<?= $_POST['pnamap_center_lng']?>" /><hr />
地図：拡大度
<input type="text" name ="zoom" maxlength =50 value="<?= $_POST['zoom']?>" /><hr />
地図：緯度
<input type="text" name ="lat" maxlength =50 value="<?= $_POST['lat']?>" /><hr />
地図：経度
<input type="text" name ="lng" maxlength =50 value="<?= $_POST['lng']?>" /><hr />
最寄り駅
<input type="text" name ="station_ids" maxlength =50 value="<?= $_POST['pnamstation_id']?>" /><hr />
業種タイプ：大分類
<input type="text" name ="businness_type" maxlength =8 value="<?= $_POST['businness_type']?>" /><hr />
業種タイプ：初分類
<input type="text" name ="businness_type2" maxlength =8 value="<?= $_POST['businness_type2']?>" /><hr />
<input type="text" name ="mode" value="1" />

<input type="submit" value="確認画面へ" />
</from>
<?
 }
?>


<?php
 if ($_POST['mode'] == '1') {
   /*
  $items = array('orange' => 'オレンジ',
  'apple'  => 'りんご',
);

// 先頭に追加する要素を格納した配列         
$additems = array('banana' => 'ばなな',
);

// マージする
$merge = array_merge($additems, $items);
print_r($merge);
  */

?>
店舗登録：確認画面
<form method="post" action="./?add" >
業者名
<input type="text" name ="pname" maxlength =50 value="<?= $_POST['pname']?>" /><hr />
業者名英語
<input type="text" name ="pname_eng" maxlength =50 value="<?= $_POST['pname_eng']?>" /><hr />
支店名：日本語
<input type="text" name ="branch_name_ja" maxlength =50 value="<?= $_POST['branch_name_ja']?>" /><hr />
支店名：英語
<input type="text" name ="branch_name_eng" maxlength =50 value="<?= $_POST['branch_name_eng']?>" /><hr />
地図中央：緯度
<input type="text" name ="map_center_lat" maxlength =50 value="<?= $_POST['map_center_lat']?>" /><hr />
地図中央：経度
<input type="text" name ="map_center_lng" maxlength =50 value="<?= $_POST['map_center_lng']?>" /><hr />
地図拡大度
<input type="text" name ="zoom" maxlength =50 value="<?= $_POST['zoom']?>" /><hr />
地図：緯度
<input type="text" name ="lat" maxlength =50 value="<?= $_POST['lat']?>" /><hr />
地図：経度
<input type="text" name ="lng" maxlength =50 value="<?= $_POST['lng']?>" /><hr />
最寄り駅
<input type="text" name ="station_ids" maxlength =50 value="<?= $_POST['station_ids']?>" /><hr />
業種：大分類
<input type="text" name ="businness_type" maxlength =8 value="<?= $_POST['businness_type']?>" /><hr />
業種：
<input type="text" name ="businness_type2" maxlength =8 value="<?= $_POST['businness_type2']?>" /><hr />
<input type="hidden1" name ="mode" value=2 />

<input type="submit" value="登録実行" />
</from>
<?
 }
?>

<?php
  if ($_POST['mode'] == '2') {
    $_POST['mode'] = 1;
    $_POST['sid'] = 
    $Shops = new Shops();
    unset($_POST['mode']);
    $res = $Shops->insert($_POST);
  
?>
店舗登録：登録完了

<?
  }
?>












<?php


if($_GET['s'] == 'edit'){
  if ($_GET['b'] != '') {
    $_POST['shop_id'] = $_GET['b'];
  } else {
    $_POST['shop_id'] = '';
  }
  
 ?>
 
 
 <?php

  if ($_POST['mode'] == '') { //緯度、経度、latitude、longitude
 
 ?>
 店舗登録：情報入力
 <form method="post" action="./?edit" >
 業者名
 <input type="text" name ="pname" maxlength =50 value="<?= $_POST['pname']?>" /><hr />
 業者名：英語
 <input type="text" name ="pname_eng" maxlength =50 value="<?= $_POST['pname_eng']?>" /><hr />
 支店名：日本語
 <input type="text" name ="branch_name_ja" maxlength =50 value="<?= $_POST['branch_name_ja']?>" /><hr />
 支店名：英語
 <input type="text" name ="branch_name_eng" maxlength =50 value="<?= $_POST['branch_name_eng']?>" /><hr />
 地図中央：緯度
 <input type="text" name ="map_center_lat" maxlength =50 value="<?= $_POST['map_center_lat']?>" /><hr />
 地図中央：経度
 <input type="text" name ="map_center_lng" maxlength =50 value="<?= $_POST['pnamap_center_lng']?>" /><hr />
 地図：拡大度
 <input type="text" name ="zoom" maxlength =50 value="<?= $_POST['zoom']?>" /><hr />
 地図：緯度
 <input type="text" name ="lat" maxlength =50 value="<?= $_POST['lat']?>" /><hr />
 地図：経度
 <input type="text" name ="lng" maxlength =50 value="<?= $_POST['lng']?>" /><hr />
 最寄り駅
 <input type="text" name ="station_ids" maxlength =50 value="<?= $_POST['pnamstation_id']?>" /><hr />
 業種タイプ：大分類
 <input type="text" name ="businness_type" maxlength =8 value="<?= $_POST['businness_type']?>" /><hr />
 業種タイプ：初分類
 <input type="text" name ="businness_type2" maxlength =8 value="<?= $_POST['businness_type2']?>" /><hr />
 <input type="text" name ="mode" value="1" />
 
 <input type="submit" value="確認画面へ" />
 </from>
 <?
  }
 ?>
 
 
 <?php
  if ($_POST['mode'] == '1') {
 ?>
 店舗登録：確認画面
 <form method="post" action="./?edit" />
 業者名
 <input type="text" name ="pname" maxlength =50 value="<?= $_POST['pname']?>" /><hr />
 業者名英語
 <input type="text" name ="pname_eng" maxlength =50 value="<?= $_POST['pname_eng']?>" /><hr />
 支店名：日本語
 <input type="text" name ="branch_name_ja" maxlength =50 value="<?= $_POST['branch_name_ja']?>" /><hr />
 支店名：英語
 <input type="text" name ="branch_name_eng" maxlength =50 value="<?= $_POST['branch_name_eng']?>" /><hr />
 地図中央：緯度
 <input type="text" name ="map_center_lat" maxlength =50 value="<?= $_POST['map_center_lat']?>" /><hr />
 地図中央：経度
 <input type="text" name ="map_center_lng" maxlength =50 value="<?= $_POST['map_center_lng']?>" /><hr />
 地図拡大度
 <input type="text" name ="zoom" maxlength =50 value="<?= $_POST['zoom']?>" /><hr />
 地図：緯度
 <input type="text" name ="lat" maxlength =50 value="<?= $_POST['lat']?>" /><hr />
 地図：経度
 <input type="text" name ="lng" maxlength =50 value="<?= $_POST['lng']?>" /><hr />
 最寄り駅
 <input type="text" name ="station_ids" maxlength =50 value="<?= $_POST['station_ids']?>" /><hr />
 業種：大分類
 <input type="text" name ="businness_type" maxlength =8 value="<?= $_POST['businness_type']?>" /><hr />
 業種：
 <input type="text" name ="businness_type2" maxlength =8 value="<?= $_POST['businness_type2']?>" /><hr />
 <input type="hidden1" name ="shop_id" value="<?= $_POST['shop_id']?>" />
 <input type="hidden1" name ="mode" value=2 />
 
 <input type="submit" value="登録実行" />
 </from>
 <?
  }
 ?>
 
 <?php
   if ($_POST['mode'] == '2') {
    $_POST['mode'] = 1;
    $_POST['sid'] = $supporterData['id'];
     $Shops = new Shops();
     unset($_POST['mode']);
     $res = $Shops->update($_POST);
   
 ?>
 店舗登録：登録完了
 
 <?
   }
 ?>
  <?
}
 ?>
