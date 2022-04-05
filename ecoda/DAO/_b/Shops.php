<?php
/**
 * お店/起業クラス
 * 
 */
$DR = '/home/tes-sev/art-festival.net/public_html';

require_once $DR."/ekoda/DAO/Common.php";
require_once $DR."/ekoda/DAO/Dbconnect.php";
require_once $DR."/ekoda/sys/Session.php";
Class Shops extends Dbconnect
{
    public $CON = null;
    public $session_supporter_id = null;
    public $isReal2Supporter = false;
    public $RES = null;

    function __construct(){
        $Dbconnect = new Dbconnect();
        $this->CON = $Dbconnect->connect();
        var_dump($this->CON);
        $Session = new Session();
        $session_supporter_data = $Session->getSupporterDataFromSession();
        $this->session_supporter_id = $session_supporter_data['id'];
    }


    public function getShopDataAll(){
        $RES = null;
        try{
            $sth = $this->CON->prepare('SELECT * FROM shops ORDER BY id ASC');
            $sth->execute();
            $RES = $sth->fetchAll();
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
        return $RES;    
    }

    public function getShopDataById($id = 0){
        $RES = null;
        try{
            $sth = $this->CON->prepare('SELECT * FROM shops WHERE sid = ? ORDER BY id ASC');
            $sth->execute(array($id));
            $RES = $sth->fetchAll();
        }catch(mysqli_sql_exception $e){
//            echo "<hr />SQL error:".$e;
        }
        return $RES[0];
    }

    public function getShopDataBySid($sid = 0){
        $RES = null;
        try{
            $sth = $this->CON->prepare('SELECT * FROM shops WHERE sid = ? ORDER BY id ASC');
            $sth->execute(array($sid));
            $RES = $sth->fetchAll();
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
        return $RES;
    }

    public function insert($postData = array()){

        $postData['sid'] = $this->session_supporter_id;
        $addArray = array('sid'=> $this->session_supporter_id);
        $postData = array_merge($addArray,$postData);
        unset($postData['mode']);

        $stmt = $this->CON->prepare("INSERT INTO shops (`id`, `sid`, `pname`, `pname_eng`, `branch_name_ja`, `branch_name_eng`, `map_center_lng`, `map_center_lat`, `zoom`, `lng`, `lat`, `station_ids`, `businness_type`, `businness_type2`, `createtime`, `updatetime`) 
        VALUES (null, :sid,:pname,:pname_eng,:branch_name_ja,:branch_name_eng,:map_center_lng,:map_center_lat,:zoom,:lng,:lat,:station_ids,:businness_type,:businness_type2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");

        try{
            $stmt->bindParam(':sid',$postData['sid']);
            $stmt->bindParam(':pname',$postData['pname']);
            $stmt->bindParam(':pname_eng',$postData['pname_eng']);
            $stmt->bindParam(':branch_name_ja',$postData['branch_name_ja']);
            $stmt->bindParam(':branch_name_eng',$postData['branch_name_eng']);
            $stmt->bindParam(':map_center_lng',$postData['map_center_lng']);
            $stmt->bindParam(':map_center_lat',$postData['map_center_lat']);
            $stmt->bindParam(':zoom',$postData['zoom']);
            $stmt->bindParam(':lng',$postData['lng']);
            $stmt->bindParam(':lat',$postData['lat']);
            $stmt->bindParam(':station_ids',$postData['station_ids']);
            $stmt->bindParam(':businness_type',$postData['businness_type']);
            $stmt->bindParam(':businness_type2',$postData['businness_type2']);
    
            $stmt->execute();
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
    }




    public function update($postData = array(),$id = 0){
        $postData['id'] = $id;//$this->session_supporter_id;
        echo 
        $SQL=<<<EOF
UPDATE `tessev_artfestival`.`shops` SET 
`pname` = :pname,
`pname_eng` = :pname_eng,
`branch_name_ja` = :branch_name_ja,
`branch_name_eng` = :branch_name_eng,
`map_center_lng` = :map_center_lng,
`map_center_lat` = :map_center_lat,
`zoom` = :zoom,
`lng` = :lng,
`lat` = :lat,
`station_ids` = :station_ids,
`businness_type` = :businness_type,
`businness_type2` = :businness_type2,
`updatetime` = CURRENT_TIMESTAMP

WHERE `shops`.`id` = :id
EOF;

        try{
            $stmt = $this->CON->prepare($SQL);

            $stmt->bindParam(':pname',$postData['pname']);
            $stmt->bindParam(':pname_eng',$postData['pname_eng']);
            $stmt->bindParam(':branch_name_ja',$postData['branch_name_ja']);
            $stmt->bindParam(':branch_name_eng',$postData['branch_name_eng']);
            $stmt->bindParam(':map_center_lng',$postData['map_center_lng']);
            $stmt->bindParam(':map_center_lat',$postData['map_center_lat']);
            $stmt->bindParam(':zoom',$postData['zoom']);
            $stmt->bindParam(':lng',$postData['lng']);
            $stmt->bindParam(':lat',$postData['lat']);
            $stmt->bindParam(':station_ids',$postData['station_ids']);
            $stmt->bindParam(':businness_type',$postData['businness_type']);
            $stmt->bindParam(':businness_type2',$postData['businness_type2']);

            $stmt->bindParam(':id',$postData['id']);

            $res = $stmt->execute();
//            echo "<pre>";
//            $stmt->debugDumpParams();
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
    }
}