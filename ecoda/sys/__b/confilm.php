<?php
//include(authCHeck.php);
$supporter_id=66;
echo
$tblTarget = (isset($_POST['tblTarget']))?$_POST['tblTarget']:'';
if(count($_POST) > 0 && $tblTarget !='' && $supporter_id !='' ){echo 2;
    $_SESSION = ['supporter_id'.$supporter_id.'_tblTarget'.$tblTarget.'_line_id'.$line_id => $_POST];
    $session_data = $_SESSION ;
}else{
    echo 5;
}
include('imageUpload.php');

echo "<pre>";var_dump($session_data);echo "</pre>";
?>