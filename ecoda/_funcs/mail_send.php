<?

function mail_send($mailto,$subject,$body,$sender,$ReturnPath){
	$sender			= base64_encode($sender); 
	$MailHeader		= "From: =?ISO-2022-JP?B?$sender?= <$ReturnPath>\nReply-To: $ReturnPath\nErrors-To: $ReturnPath";
	$Result			= mb_send_mail($mailto, $subject,$body, $MailHeader);
	return $Result;
}
?>
