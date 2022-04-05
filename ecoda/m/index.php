<?php

  require 'MailClass.php';
$MailClass = new MailClass();

// 宛先
$to = "vegant111@gmail.com";
 
// 送信元

 
// メールタイトル
$subject = "仮登録のお知らせ";
 
// メール本文
$body = <<< EOM
メール本文
 
■特殊文字
①②③
㈱㌔髙
 
テキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキスト
EOM;


$MailClass->sjis_mail($to, $subject, $body)

?>