<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

//require_once $DR."DAO/Common.php");

require_once( $DR."DAO/Dbconnect.php");
include($DR."sys/Session.php");
require_once( $DR."DAO/Shops.php");
$Dbconnect = new Dbconnect();
$PDO = $Dbconnect->connect();
/*
$Session = new Session();
$session_supporter_data = $Session->getSupporterDataFromSession();
$this->session_supporter_id = $session_supporter_data['id'];
*/
$lngTail = (isset($lang) && $lang == 'eng')?'_eng':'_ja';
$Shops = new Shops($PDO);
$shopDataAry = $Shops->getShopDataBySopId($_GET['i']);

echo "<pre>";var_dump($shopDataAry);echo "</pre>";

?><!DOCTYPE html>
<html>
  <head>
    <title>Info Windows</title>
    <link rel="stylesheet" type="text/css" href="" />

    <style>
#map {
      width: 100%;
      height: 400px;	
      /*
      border: 0px solid #930;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      background: 			#47332C;
*/
    </style>
  </head>
  <body>
  