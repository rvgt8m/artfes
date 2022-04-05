<?php
/*

mb_language("Japanese"); 
mb_internal_encoding("UTF-8");
 
$email = "xxxxxx@example.com";
$subject = "テスト"; // 題名 
$body = "これはテストです。\n"; // 本文
$to = 'yyyyy@example.com';
$header = "From: $email\nReply-To: $email\n";

*/
echo 2121;
    function mail_send($mailto,$subject,$body,$sender,$ReturnPath){
echo 777;
                $sender			= base64_encode($sender);
echo "MailHeader = ". 
                $MailHeader		= "From: =?ISO-2022-JP?B?$sender?= <$ReturnPath>\nReply-To: $ReturnPath\nErrors-To: $ReturnPath";
                $Result			= mb_send_mail($mailto, $subject,$body, $MailHeader);

echo $Result; 
                return $Result;
    }
?>
