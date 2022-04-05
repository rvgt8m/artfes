<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";

require_once $DR."DAO/mst_categories.php";

$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
$MstCategories = new MstCategories();
$category = $MstCategories->getAll(ART_CATEGORIES);
$lang = 1;
$langAryKey = $lang - 1;

?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Ajaxのサンプル</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


<form action="" method="post" >
  <?php foreach(ART_CATEGORIES as $cat_id => $data){?>
    <li>
    <a href="javascript:void(0);" onclick="sc(<?php echo $cat_id;?>,0,0)"><?php echo $data[$langAryKey]?></a>
  </li>
  <?php }?>

  <input type=hidden1 name="" value="" />

</form>


<p>名前を入力して、送信ボタンを押してください。</p>
<p>
	<label>名前 </lable><input type="text" name="name" id="name">
	<input type="button" id="button1" value="送信">
</p>
<div id="result"></div>

<script type="text/javascript">
    function sc(c1,c2,c3){//alert(c1);
        var data = {
				c1:c1,
				c2:c2,
				c3:c3,
			};
        $.ajax({
			url:'/api/ajax_test.php',
            type:'GET',
            data:JSON.stringify(data),  // JSONデータ本体
            contentType: 'application/json', // リクエストの Content-Type
            dataType: "json",           // レスポンスをJSONとしてパースする
            success: function(json_data) {   // 200 OK時
                $('#result').html(json_data);
            // JSON Arrayの先頭が成功フラグ、失敗の場合2番目がエラーメッセージ
            if (!json_data[0]) {    // サーバが失敗を返した場合
                alert("Transaction error. " + json_data[1]);
                return;
            }
            // 成功時処理
            location.reload();
            },
            error: function() {         // HTTPエラー時
                alert("Server Error. Please try again later.");
            },
            complete: function() {      // 成功・失敗に関わらず通信が終了した際の処理
                //button.attr("disabled", false);  // ボタンを再び enableにする
                $('#result').html("dd");
            }
        });
/*
		}).done(function(data){
			$('#result').html(data);
		}).fail(function(){
			alert('通信に失敗しました。');
		});   
*/
    }
$(function(){
	$('#button1').click(function(){
		$.ajax({
			url:'/api/ajax_test.php',
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
// $('body').html('<h1>こんにちは！</h1>');
</script>

</body>
</html>