<?php


Class Session
{
    private $cookie_supporter_id = null;
    private $session_supporter_id = null;
    private $session_supporter_data = null;
    function __construct(){
		if (isset($_COOKIE["LZH"])) {
			session_start();
			$cookie_supporter_id = $_COOKIE["LZH"];
		}   
    }
	function ep($bur){
		echo $bur;
	}

    function setSession4SupporterData($supporterData = array()){
        if ($supporterData['username'] != '') {
			// サポーター情報をセッションに格納
			//session_register("SESsupporterData");
			session_start();
			$_SESSION["SESsupporterData"] = $supporterData;

		}
	}

	function getSupporterDataFromSession(){
		session_start();
	//	var_dump($_SESSION["SESsupporterData"]);

		if ( isset($_SESSION["SESsupporterData"]['id'])) {
			return $supporterData = $_SESSION["SESsupporterData"];
		}
		//echo "getSupporterDataFromSession";
	}

	function logoutSupporterSession(){
		if ( isset($_SESSION["SESsupporterData"]['id'])) {
			$_SESSION["SESsupporterData"] = null;
		}
	}

}
?>