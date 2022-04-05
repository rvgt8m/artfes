<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";

require_once $DR."DAO/mst_categories.php";

$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
$MstCategories = new MstCategories();

if (isset($_POST['c1'])) {
	$second_categories = $MstCategories->getCategoryDataById($_POST['c1']);
}

header("Content-Type: application/json; charset=utf-8");
echo json_encode($second_categories);
exit;
