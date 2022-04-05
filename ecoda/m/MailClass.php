<?php
mb_language('ja');
mb_internal_encoding('SJIS');

class MailClass
{
/*
	$to ='';
	$title = '';
	$body ='';
*/
	function __construct(){
		// コンストラクタ内で行いたい処理
	}
	
	// メール送信
	function sjis_mail($to, $subject, $body){
		$subject = mb_convert_encoding($subject, "SJIS");
		$body = mb_convert_encoding($body, "SJIS");

		$from = "From: 江古田芸術祭<tes-sev@sv361.xserver.jp>";
		mail($to, $subject, $body, $from);
	}
}
