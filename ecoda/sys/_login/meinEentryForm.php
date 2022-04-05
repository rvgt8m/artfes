<?php
$DR = $_SERVER['DOCUMENT_ROOT'];

include($DR."/../_funcs/make_password.php");
require_once $DR."/DAO/Supporters.php";
require_once $DR."/sys/Session.php";
echo strlen($_POST['pre_entrycode']);
if ($_GET['p'] != '' && strlen($_POST['pre_entrycode']) == '') {
    $_POST = null;
}

if ($_POST['username'] !='' && $_POST['password'] !='' && $_POST['pre_entrycode'] != '') {
    /*
    // check validate posted data
    $Validate = new Validate();
    if ($Validate->checkPostData($_POST) == null) {

    } else {

    }
    */
    $_POST['password'] = password2Hash($_POST['password']);
    echo "HERE";
  
    $Supporters = new Supporters();
    $supporterData = $Supporters->getSupporter($_POST['username'],$_POST['password'],$_POST['pre_entrycode']);
    
// password2Hash('test');
    if (count($supporterData) == 1) {
        // ログイン認証成功
        // セッションにサポーター基本情報を格納
//        echo "<hr color=red>";
        $Session = new Session();
        $Session->setSession4SupporterData($supporterData[0]);

//        echo "login";
        // マイページに遷移
        header('Location: '.__FESURL__.'/sys/supporters');
    } else {
        // ログインエラー
        echo "error";
    }
}
?>
<form action="./?p=1" method="post" >


▼ログインID<br />

<input type="text" name="username" id="username" value="<?php echo $_POST[username];?>" maxlength="50" /><br />
<hr />
▼パスワード（半角英数字のみご入力ください）<br />
<input type="password" name="password" mxlength=20 />
<hr />
<input type="hidden1" name="pre_entrycode" value="<?= $_GET['p'];?>" maxlength="50" />
<input type="submit" value="ログイン" />
</form>



?>
meinEentryForm


