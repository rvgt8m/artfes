<?php
/**
 * お店/起業クラス
 * 
 */
$DR = '/home/tes-sev/art-festival.net/public_html';

//require_once $DR."/ekoda/DAO/Common.php";
require_once $DR."/ecoda/DAO/Dbconnect.php";
//require_once $DR."/ekoda/sys/Session.php";
Class UserArtCategories extends Dbconnect
{
    public $CON = null;
    public $session_supporter_id = null;
    public $isReal2Supporter = false;
    public $RES = null;

    function __construct($session_supporter_data = []){
        $Dbconnect = new Dbconnect();
        $this->CON = $Dbconnect->connect();
        $Session = new Session();
//        $session_supporter_data = $Session->getSupporterDataFromSession();
        $this->session_supporter_id = $session_supporter_data['id'];
    }
    public function insert($session_supporter_id = 0,$root_category_id = 0 ,$sub_root_category_id = 0 ,$postData = []){

        $res = false;
        if(
            $session_supporter_id > 0
            &&
            (
                $root_category_id > 0
                &&
                $sub_root_category_id > 0
            )
        ){

$SQL =<<<EOF
INSERT INTO `tessev_artfestival`.`user_art_categories` 
(`id`, `is_disable`, `supporter_id`, `root_category_id`, `sub_root_category_id`, `sort_id`, `updatetime`, `createtime`) 
VALUES (NULL, :is_disable, :supporter_id, :root_category_id, :sub_root_category_id, '', '', CURRENT_TIMESTAMP);
EOF;
            $stmt = $this->CON->prepare($SQL);
            $is_disable = (isset($postData['is_disable']))?$postData['is_disable']:0;

            $stmt->bindParam(':is_disable', $is_disable);
            $stmt->bindParam(':sub_root_category_id',$sub_root_category_id, PDO::PARAM_INT);
            $stmt->bindParam(':supporter_id',$session_supporter_id);
            $stmt->bindParam(':root_category_id',$root_category_id);
            /*
            $stmt->bindParam(':is_disable', $is_disable);
            $stmt->bindParam(':supporter_id',$session_supporter_id);
            $stmt->bindParam(':root_category_id',$root_category_id);
            */
            echo "<br /> session_supporter_id=".$session_supporter_id;
            echo "<br /> root_category_id=".$root_category_id;
            echo "<br /> sub_root_category_id=".$sub_root_category_id;
            /*
            $stmt->bindParam(':sub_root_content_id',$sub_root_content_id);
            $sort_id = (isset($postData['sort_id']))?$postData['sort_id']:0;
            $stmt->bindParam(':sort_id',$sort_id);
            */

            try{
                echo "exe---------------";
                $res = $stmt->execute();
            }catch(mysqli_sql_exception $e){
                echo "<hr />SQL error:".$e;
            }
        }
        return $res;
    }



}