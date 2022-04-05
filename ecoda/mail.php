<?php
function m($to){
mb_internal_encoding("utf-8");
 
 //宛先、Fromを設定
 // $to = "vegant111@gmail.co";//"twvg888@yahoo.co.jp";//$mailto;//"toaddress@example.com";
 $fromname = mb_encode_mimeheader("送信者55");
 $from = "tes-sev@sv361.xserver.jp";//a'no-replay@art-festival.net';//$ReturnPath;//"fromaddress@example.com";
  
 //headerを設定
 $charset = "UTF-8";
 $headers['MIME-Version'] 	= "1.0";
 $headers['Content-Type'] 	= "text/plain; charset=".$charset;
 $headers['Content-Transfer-Encoding'] 	= "8bit";
 $headers['From'] 		= '"'.$fromname.'"<'.$from.'>"';
  
 //headerを編集
 foreach ($headers as $key => $val) {
     $arrheader[] = $key . ': ' . $val;
 }
 $strHeader = implode("\n", $arrheader);
  
 //件名を設定（JISに変換したあと、base64エンコードをしてiso-2022-jpを指定する）
 $subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding("メールの件名ですよ","JIS","UTF-8"))."?=";
  
 //本文を設定
 $body = "これが本文です";
  
 //送ります！
 $res =mail(
     $to,
     $subject,
     $body,
     $strHeader
 );
     echo "<hr />res=". $res;

}
/*
PHP Version 

▼失敗
7.0.33
7.1.33　
7.2.34
7.3.25
8.0.7

▼成功






*/
mail("vegant111@gmail.com","title","body");
m('vegant111@gmail.com');
m('twvg888@yahoo.co.jp');
m("honoka8732@gmail.com");
phpinfo();