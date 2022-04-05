<?php
session_start();
$session_key = 'supporter_id66_tblTargetartWorks_line_id';

//echo "<pre>";var_dump($_SESSION["SESsupporterData"][$session_key]);echo "</pre>";
//echo "<pre>";var_dump($_SESSION["SESsupporterData"]["supporter_id66_tblTargetartwork_line_id"]);echo "</pre>";
/*
・DB接続
・authchekc.phpによりユーザ識別子取得
・更新対象テーブルクラスインスタンス化
・更新メソッドのコール
・更新結果を取得し結果を反映したエラーコードをセッションに格納しフォーム画面なりに画面移動しエラーの場合はその旨を表示




*/
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';
require_once( $DR."/DAO/Dbconnect.php");
$Dbconnect = new Dbconnect();
$PDO = $Dbconnect->connect();
require_once $DR."sys/Session.php";
$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
$supporter_id = 66;//$supporterData['id'];

require_once $DR."/DAO/Contents.php";

$tblTarget = ($_GET['m'] !='')? $_GET['m']:'artwork';
//echo "<pre>";var_dump($_SESSION);echo "</pre>";
$session_key ='supporter_id'.$supporter_id.'_tblTarget'.$_POST['tblTarget'].'_line_id'.$_POST['line_id'];
$session_key ='supporter_id66_tblTargetartwork_line_id';

$session_data = $_SESSION["SESsupporterData"][$session_key];
//$session_data = $_SESSION["SESsupporterData"][$session_key] ;
if(isset($_SESSION["SESsupporterData"][$session_key]) 
&& $_SESSION["SESsupporterData"][$session_key]['title'] != ''){
    $session_data = $_SESSION["SESsupporterData"][$session_key];
    $Contents = new Contents($PDO,$_POST['tblTarget']);
    $res = null;
    $resultCode = null;
    if($_POST['line_id'] == ''){echo "insert";
        
echo "<pre>befpre insert():::::555555555555555::::<br />";var_dump($session_data);echo "</pre>";
        $res = $Contents->insert($session_data);
        $resultCode = "i";
    }else{echo "update";
        $res = $Content->update($session_data);
        $resultCode = "u";
    }
    echo "<hr color=green />";
    var_dump($res);
    echo "<hr color=green />";
    if ($res || $res == null) {
echo "<hr />Y<hr />";//        header("location:/sys/supporters/?r=".$resultCode);
    } else {
        echo "<hr />e<hr />";
//        header("location:/sys/supporters/?r=e");
    }
    $_SESSION[$session_key] = [];
}else{//
    
echo "ddd";
}





?>