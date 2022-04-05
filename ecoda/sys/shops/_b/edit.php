<?php

$DR = '/home/tes-sev/art-festival.net/public_html';


require_once $DR."/ekoda/DAO/Shops.php";
require_once $DR."/ekoda/sys/Session.php";

$Shops = new Shops();

// case Confirm::Store the sent value in the session.
if ($_POST['mode'] == 'confirm') {
echo "confirm";

}
// case Execute::update data.









if ($_POST['mode'] == 'execute') {
//	$_POST == $_SESSSION['id_sid'];   
    $res = $Shops->updateShopData($_POST);
}

if ($_POST['mode'] == null) {
  if($supporterData['id'] > 0){echo "SQ";
    $Shops = new Shops();
    $_POST = $Shops->getShopDataById($supporterData['id']);
  }
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
<input type="text" name ="station_ids" maxlength =50 value="<?= $_POST['station_ids']?>" /><hr />
業種タイプ：大分類
<input type="text" name ="businness_type" maxlength =8 value="<?= $_POST['businness_type']?>" /><hr />
業種タイプ：初分類
<input type="text" name ="businness_type2" maxlength =8 value="<?= $_POST['businness_type2']?>" /><hr />
<!input type="hidden1" name ="mode" value="confirm" />

<input type="hidden1" name ="mode" value="execute" />
<input type="hidden1" name ="id" value="<?= $_POST['id']?>" />

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
<form method="post" action="./?edit" >
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
<!input type="hidden1" name ="mode" value="confirm" />
<input type="hidden1" name ="mode" value="execute" />
<input type="hidden1" name ="id" value="<?= $_POST['id']?>" />
<input type="submit" value="登録実行" />
</from>
<?
 }
?>
<hr color=green />
<?php
if ($_POST['mode'] == '2') {
  $_POST['mode'] = 1;
  $_POST['sid'] = 
  $Shops = new Shops();
  unset($_POST['mode']);

  if($Shops->update($_POST,$_POST['id'])){
    ?><hr color=red />
    <a href="https://ekoda.art-festival.net/sys/shops?<?=time()?>"?
更新完了</a>

    <?
  //  header('https://ekoda.art-festival.net/sys/shops?'.time());
  }

?>
更新完了

<?
  }
?>

