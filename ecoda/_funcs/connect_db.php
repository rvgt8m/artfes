<?
#=====================================================================
# 修正日		: Ver. : 修正者 : 内容
# 2003.05.08		: 1.00 : 水町 : 初版
#---------------------------------------------------------------------
# Abstract		: DB接続
# file Name		: _func/connect_db.php
# Version		: 1.00
#---------------------------------------------------------------------
# Copyright TES-WEB studio
#=====================================================================
function connect_db (){// mysqli
	$CON=mysqli_connect ("mysql42a.xserver.jp", "tessev_artuser", "dignityartfes") or die ('I cannot connect to the database because: ' . mysql_error());
	if (!(mysqli_select_db($CON,"tessev_art"))) {
		die;
	}
	return $CON;
}
?>
