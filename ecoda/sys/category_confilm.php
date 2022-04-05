<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";
$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
require_once $DR."DAO/user_art_categories.php";
$UserArtCategories = new UserArtCategories();
/*

array(2) {
  ["sub_root_category_id"]=>
  array(2) {
    [0]=>
    string(2) "36"
    [1]=>
    string(2) "40"
  }
  ["root_category_id"]=>
  string(1) "1"
}

*/
echo "<pre>";var_dump($_POST);echo "</pre>";
//exit;
$count = count($_POST);
$sub_root_category_ids = [];
$errorIds= [];
$sub_root_category_id_count = count($_POST["sub_root_category_id"]);

for($i = 0 ; $i < count($_POST["sub_root_category_id"]); $i++ ){echo $_POST["sub_root_category_id"][$i];
    if($UserArtCategories->insert($supporterData[id],$_POST['root_category_id'],$_POST["sub_root_category_id"][$i],$_POST) ){
        echo "success";
    }else{
        echo "error";
        array_push($errorIds,$sub_root_category_id);
    }
}
exit;

if($sub_root_category_id_count > 0){
    for( $i=0; $i<$sub_root_category_id_count; $i++ ){
        if (isset($_POST["sub_root_category_id".$i]) ){
            if(!$UserArtCategories->insert($_POST['root_category_id'],$_POST['sub_root_category_id'],$_POST) ){
                array_push($errorIds,$_POST['sub_root_category_id'.$i]);
            }
        }
    }
}
/*
$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
echo "<pre>";var_dump($_POST);echo "</pre>";
if (isset($_POST['root_category_id']) && $_POST['root_category_id'] > 1) {
    $res = $MstCategories->insert($_POST['root_category_id']);

}
*/