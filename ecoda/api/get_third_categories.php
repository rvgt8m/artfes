<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";

require_once $DR."DAO/mst_categories.php";

$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
$MstCategories = new MstCategories();
$_POST['c2'] = 11;
if (isset($_POST['c2'])) {
	$third_categories = $MstCategories->getThirdCategoryDataById($_POST['c2']);
}
//var_dump($second_categories);
//getCategoryDataById

header("Content-Type: application/json; charset=utf-8");
echo json_encode($third_categories);
exit;
