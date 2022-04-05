<?php

$DR = '/home/tes-sev/art-festival.net/public_html';

include($DR."/ekoda/_conf/define_ekoda.php");
require_once $DR."/ekoda/sys/Session.php";
require_once $DR."/ekoda/DAO/Shops.php";

$Session = new Session();

$supporterData = $Session->getSupporterDataFromSession();

function getViewName($supporterData = array()){
    $viewName = null;
    if($supporterData['handle_ja'] != ''){
        $viewName = $supporterData['handle_ja'];
    }
    if($supporterData['name_ja'] != ''){
        $viewName = $supporterData['name_ja'];
    }
    return $viewName;
}

//var_dump($supporterData);
?>


<table border=1 width=100% heigh=100%>
    <tr>
    <td colspan=5 align=right>
        <?=getViewName($supporterData)?>さんのマイページ | 
        <a href="../_logout">ログアウト</a>
    </td>
<tr>

<tr>
    <td>
        いいね/オファー
    </td>
    <td>
        <a href="../shops">お店登録</a>
    </td>
    <td>
        作品登録
    </td>
    <td>
        イベント登録
    </td>
    <td>
        活動登録
    </td>
<tr>
<tr>
    <td>
        <a href="../shops?add">お店登録</a>
    </td>
    <td>
        <a href="../shops?edit">お店基本情報更新</a>
    </td>
    <td>
        <a href="../shops?additem">商品追加</a>
    </td>
    <td>
    <a href="../shops?CM">告知登録</a>
    </td>
    <td>
    <a href="../shops?supportArtits">展示（告知）管理</a>
    </td>
<tr>
</table>

<?php
$Shops = new Shops();
if ($_SERVER['QUERY_STRING']==''){
    $shopDataAry = $Shops->getShopDataBySid($supporterData['id']);

    foreach($shopDataAry as $data){
?>
<a href="./?edit&id=<?=$data['id']?>"><?=$data['pname']?><?=$data['branch_name_ja']?></a><hr />
<?  
    }
}
if ($_SERVER['QUERY_STRING']!=''){echo $_SERVER['QUERY_STRING'];
//    list('' , $viewMMode) = explode('/',$_SERVER['QUERY_STRING']);
}
$subject = $_SERVER['QUERY_STRING'];
$pattern = '/^edit/';
preg_match($pattern, substr($subject,0), $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
if(count($matches) > 0 && $_GET['id'] > 0){
    include('edit.php');echo 'edit';
}
/*
if(
preg_match('^/edit/', $_SERVER['QUERY_STRING'], $matches)
){
    var_dump($matches);
}
*/
if(trim($_SERVER['QUERY_STRING']) == 'add'){
    include('add.php');echo 555;
}

if(trim($_SERVER['QUERY_STRING']) == 'edit'){
    include('edit.php');echo 'edit';
}

?>


