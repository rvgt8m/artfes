<?php
//$this->autoRender = false;

$DR = $_SERVER[DOCUMENT_ROOT];// "/home/tes-sev/art-festival.net/public_html/ekoda";

include($DR."/_inc/header.php");
include($DR."/_funcs/check_str.php");




include($DR."/_conf/define_ekoda.php");
include($DR."/../_funcs/mail.php");
include($DR."/../_funcs/make_password.php");

require_once $DR."/DAO/Supporters.php";
require_once $DR."/sys/Session.php";




//include($doc_root."/_funcs/mail_send.php");
mb_language("ja");
mb_internal_encoding("UTF-8");
if ($_POST[mode] == ''){ $mode = 0;} else {$mode = $_POST[mode];}
$preentrycode = '';
//echo "".$_SERVER[DOCUMENT_ROOT];
function mail_send2($mailto,$subject,$body,$sender,$ReturnPath){
	$sender			= base64_encode($sender); 
	$MailHeader		= "From: =?ISO-2022-JP?B?$sender?= <$ReturnPath>\nReply-To: $ReturnPath\nErrors-To: $ReturnPath";
	$Result			= mb_send_mail($mailto, $subject,$body, $MailHeader);
	return $Result;
}
if($_POST[username] !='' && $_POST[email] !='' && $_POST[handle_ja] !='' && $_POST[password] !=''){

    list($_POST[username],$alert_text_handle_ja,$hidden_tag) = check_str($_POST[username],3,50,8,'handle_ja');  
    list($_POST[handle_ja],$alert_text_handle_ja,$hidden_tag) = check_str($_POST[handle_ja],3,50,8,'handle_ja');  
    $encoded_handle_ja = urlencode($_POST[handle_ja]);
    
    list($password,$alert_text_handle_ja,$hidden_tag) = check_str($_POST[password],4,8,4,'password');  

    // check email format
    list($check_str,$alert_text_email,$hidden_tag) = check_str($_POST[email],4,50,8,'email');
    if($alert_text_email == ''){


        if ($mode == 2){echo "insert";
            
            $_POST[pre_entrycode] = make_password ('c');
            $encodedHandle_ja = urlencode($_POST['handle_ja']);
            $Supporters = new Supporters();
            $Supporters->insert($_POST);
    
            // 仮登録通知メールの送信
            $body = str_replace('__HANDLE__', $_POST['handle_ja'], PRE_ENTRY_MAIL_BODY_J);
            $toEntryURL = TO_ENTRY_URL.'?p='.$_POST[pre_entrycode].'&h='.$encodedHandle_ja;
            $body = str_replace('__TOENTRYURL__', $toEntryURL, $body);
 //           echo "email=".$this->request->data['email']; 
            mailsend($_POST['email'],PRE_ENTRY_SUBJECT_J,$body,SENDER_J,RETURN_PATH);
            
            //mail_send2($_POST[email],$subject,$body,$sender,$ReturnPath);
        }
    } else {

    }
}

?>

<?php if ($mode == 0) {?>
    <form action="" method="post" >

    ▼お名前/芸名/ニックネーム<br />
    <?php if($alert_text_handle_ja != ''){?>
        <?php echo $alert_text_handle_ja;?><hr />
    <?php }?>
    <input type="text" name="handle_ja" value="<?php echo $_POST[handle_ja];?>" maxlength="50" />
        <?php if($alert_text_email != ''){?>
    <?php echo $alert_text_email;?>
    <?php }?>
    <hr />
▼ログインID（メールアドレスでもOKです）<br />
    <?php if($alert_text_usename != ''){?>
        <?php echo $alert_text_username;?><hr />
    <?php }?>
    <input type="text" name="username" id="username" value="<?php echo $_POST[username];?>" maxlength="50" /><br />

 <style>
 label {
  white-space: nowrap;
}
</style>
<label>
↑ご入力のログインIDを、下のメールアドレスにも使う。<input type="checkbox" value="800" id="ch1" 
onchange="$('#email').val($('#username').val())" /><br />
</label>    <hr />
▼メールアドレス(ご登録確認メールをお送りします)<br />
    <?php if($alert_text_email != ''){?>
        <?php echo $alert_text_email;?>
    <?php }?>
    <input type="text" name="email" id="email" value="<?php echo $_POST[email];?>" maxlength="50" />

▼パスワード（半角英数字のみご入力ください）<br />
    <input type="password" name="password" placeholder="Password">
    <span class="field-icon">
        <i toggle="password-field" class="mdi mdi-eye toggle-password"></i>
    </span>
    <hr />
    <input type="hidden1" name="mode" value="1" maxlength="2" />
    <input type="submit" value="ご確認画面へ" />
    </form>
<?php }?>

<?php if ($mode == 1) {  ?><pre><?php var_dump($_POST);?></pre>
ご確認画面
<script>
$(".toggle-password").click(function () {
    // iconの切り替え
    $(this).toggleClass("mdi-eye mdi-eye-off");

    // 入力フォームの取得
    let input = $(this).parent().prev("input");
    // type切替
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
</script>
<form action="" method="post" >
<form action="" method="post" >

▼お名前/芸名/ニックネーム<br />
<?php if($alert_text_handle_ja != ''){?>
    <?php echo $alert_text_handle_ja;?><hr />
<?php }?>
<input type="hidden1" name="handle_ja" value="<?php echo $_POST[handle_ja];?>" maxlength="50" />
<?php if($alert_text_email != ''){?>
<?php echo $alert_text_email;?>
<?php }?>
<hr />
▼ログインID（メールアドレスでもOKです）<br />
<?php if($alert_text_usename != ''){?>
    <?php echo $alert_text_username;?><hr />
<?php }?>
<input type="hidden1" name="username" id="username" value="<?php echo $_POST[username];?>" maxlength="50" /><br />

<style>
label {
white-space: nowrap;
}
</style>
<label>
↑ご入力のログインIDを、下のメールアドレスにも使う。<input type="checkbox" value="800" id="ch1" 
onchange="$('#email').val($('#username').val())" /><br />
</label>    <hr />
▼メールアドレス(ご登録確認メールをお送りします)<br />
<?php if($alert_text_email != ''){?>
    <?php echo $alert_text_email;?>
<?php }?>
<input type="text" name="email" id="email" value="<?php echo $_POST[email];?>" maxlength="50" />

▼パスワード（半角英数字のみご入力ください）<br />
<input type="password" name="password" placeholder="password"  value="<?php echo $_POST[password];?>">
<span class="field-icon">
    <i toggle="password-field" class="mdi mdi-eye toggle-password"></i>
</span>
<hr />
$
<input type="hidden1" name="mode" value="2" maxlength="2" />
<input type="hidden1" name="pre_entrycode" value="<?= $preentrycode;?>" maxlength="2" />
<input type="submit" value="ご確認画面へ" />
</form>

<?/*?

/////////////////////////////////////////////
<?php if($alert_text_handle_ja != ''){?>
    <?php echo $alert_text_handle_ja;?>encoded_handle_ja
<?php }?>
<?php if($_POST[handle_ja]){ echo $_POST[handle_ja];}?>
<input type="hidden1" name="handle_ja" value="<?php if($_POST[handle_ja]) echo $_POST[handle_ja];?>" maxlength="50" />
<?php if($alert_text_email != ''){?>
<?php echo $alert_text_email;?>
<?php }?>
<?php if($_POST[handle_ja]) echo $_POST[handle_ja];?><hr />
<?php if($_POST[email]) echo $_POST[email];?>
<input type="hidden1" name="pre_entrycode" value="555<?php echo $preentrycode;?>" maxlength="200" />
<input type="hidden1" name="email" value="<?= $_POST[email];?>" maxlength="50" /><hr />

<input type="password1" placeholder="Password"><hr />
<input type="hidden1" name="mode" value="<?if ( $mode ==''){ echo 0;}else { echo $mode;}?>" maxlength="2" />
<input type="submit" value="ご確認メール送信" />
</form>
<?*/?>
<?php }?>


<?php if ($mode == 2) {?>
仮登録いたしました！
<form action="" method="post" >
<?php if($alert_text_handle_ja != ''){?>
    <?php echo $alert_text_handle_ja;?>encoded_handle_ja
<?php }?>
<input type="text" name="handle_ja" value="<?php if($_GET[h]) echo $_GET[h];?>" maxlength="50" />
<?php if($alert_text_email != ''){?>
<?php echo $alert_text_email;?>
<?php }?>
<input type="hidden1" name="pre_entrycode" value="<?php if($_GET[p]) echo $_GET[p];?>" maxlength="200" />
<input type="text" name="email" value="<?php if($_POST[email]);?>" maxlength="50" /><hr />

<input type="password" placeholder="Password" value="<?php echo $password;?>"><hr />
<input type="status"  value="-1"><hr />
<input type="submit" value="ご確認メール送信" />
</form>
<?php }?>


