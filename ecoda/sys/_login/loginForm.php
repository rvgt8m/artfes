<?php

include(DR."/_funcs/check_str.php");
require_once DR."/DAO/Supporters.php";
require_once DR."/sys/Session.php";

include(DR."/_funcs/make_password.php");

if(
    isset($_POST["id"])
    &&
    isset($_POST["pass"])
){

    $password = password2Hash($_POST['pass']);
    $Supporters = New Supporters();
    $user = $Supporters->getSupporter($_POST["id"], $password);
    if (count($user)>0){
        $Session = New Session();
        $Session->setSession4SupporterData($user);
        header("location:http://ecoda.art-festival.net/sys/supporters/");
        exit;
    }
}

include(DR."/_inc/header.php");
?>

<form action="" method="post">
    <input type="text" name="id" maxlength=30 /><br />
    <input type="password" name="pass" maxlength=10 /><br />
    <input type="submit" name="btn" value="ログイン" /><br />
</form>
