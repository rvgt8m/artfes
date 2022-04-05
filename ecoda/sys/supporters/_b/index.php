<?php
$DR = '/home/tes-sev/art-festival.net/public_html';

require_once $DR."/ekoda/sys/Session.php";

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


<table border=1 width=100%>
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
</table>