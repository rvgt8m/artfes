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
		// �R���X�g���N�^���ōs����������
	}
	
	// ���[�����M
	function sjis_mail($to, $subject, $body){
		$subject = mb_convert_encoding($subject, "SJIS");
		$body = mb_convert_encoding($body, "SJIS");

		$from = "From: �]�Óc�|�p��<tes-sev@sv361.xserver.jp>";
		mail($to, $subject, $body, $from);
	}
}
