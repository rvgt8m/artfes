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
?><html lang="ja">
<head>
<meta charset="utf-8">
<title>Ajaxのサンプル</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



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
    </head>
<body>



<p>名前を入力して、送信ボタンを押してください。</p>
<p>
	<label>名前 </lable><input type="text" name="name" id="name">
	<input type="button" id="button1" value="送信">
</p>
<div id="result"></div>

<script type="text/javascript">
$(function(){
	$('#button1').click(function(){
		$.ajax({
			url:'/api/',
			type:'GET',
			dataType:'text',
			data: {
				your_name:$('#name').val()
			},
		}).done(function(data){
			$('#result').html(data);
		}).fail(function(){
			alert('通信に失敗しました。');
		});
	});
});
</script>
<?php exit;?>
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

<div class="result">ここにajaxの結果を書き換えます</div>
<input type="button" class="sample_btn" value="ajax通信で取得する">

<script>
$(function(){
    //.sampleをクリックしてajax通信を行う
    $('.sample_btn').click(function(){
        $.ajax({
            url: '/ajax/test.html',
            /* 自サイトのドメインであれば、https://kinocolog.com/ajax/test.html というURL指定も可 */
            type: 'POST',
            dataType: 'json',
            data : {
              ary : ['a', 'b', 'c']
            }
        }).done(function(data){
            /* 通信成功時 */
            $('.result').html(data); //取得したHTMLを.resultに反映
            
        }).fail(function(data){
            /* 通信失敗時 */
            alert('通信失敗！');
                    
        });
    });
});
</script>
<?php
        $lang = 1;
        $langAryKey = $lang - 1;//ART_CATEGORIES
//        echo "<pre>";    var_dump($category);    echo "</pre>";
//        exit;
?>
<table>
  <?php foreach($category as $data){?>
    <td>
    <?php echo ART_CATEGORIES[$data['root_category_id']][$langAryKey]?>:<?php echo $data['root_category_id'];?>|<?php echo $data['title'];?>
    </td>
  </tr>
<?php }?>


</table>

<form action="" method="post" >
  <select name="" multiple size= 10>
  <?php foreach(ART_CATEGORIES as $data){?>
    <option value="<?php echo ART_CATEGORIES[$data['root_category_id']];?>"><?php echo $data[$langAryKey]?></option>
  <?php }?>
  </select>
  <input type=hidden1 name="" value="" />

</form>