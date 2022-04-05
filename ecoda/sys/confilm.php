<?php
session_start();
//include(authCHeck.php);
$supporter_id=66;
$tblTarget = (isset($_POST['tblTarget']))?$_POST['tblTarget']:'';
if(count($_POST) > 0 && $tblTarget !='' && $supporter_id !='' ){
    
    $_POST['tid'] = preg_replace("/( |　)/", "",microtime());
    $_POST['supporter_id'] = $supporter_id;
    $session_key = 'supporter_id'.$supporter_id.'_tblTarget'.$tblTarget.'_line_id'.$line_id;
    $_SESSION["SESsupporterData"][$session_key] = $_POST;
    $session_data = $_SESSION["SESsupporterData"][$session_key] ;
}else{//v$_SESSION["SESsupporterData"] = $supporterData;
    echo 5;
}
include('imageUpload.php');
echo $session_key;
echo "<pre>";var_dump($session_data);echo "</pre>";
?>
<form action="exec.php" method="post" ENCTYPE="multipart/form-data">

<input type="submit" name="btn_f" value="入力内容で登録" />

<input type="hidden1" name="line_id" value="<?php echo $session_data['line_id'];?>" />
<input type="hidden1" name="tblTarget" value="<?php echo $session_data["tblTarget"];?>" />
<input type="hidden1" name="tid" value="<?php echo $_POST['tid'];?>" />
</form>
<?php

