<?php

require_once( $DR."DAO/Dbconnect.php");
include($DR."sys/Session.php");
require_once( $DR."DAO/Shops.php");
$Dbconnect = new Dbconnect();
$PDO = $Dbconnect->connect();

$Session = new Session();
$session_supporter_data = $Session->getSupporterDataFromSession();
$this->session_supporter_id = $session_supporter_data['id'];

$lngTail = (isset($lang) && $lang == 'eng')?'_eng':'_ja';
$Shops = new Shops($PDO);

$shopDataAry = $Shops->getShopDataAll();