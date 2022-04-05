<?php
/**
 * お店/起業クラス
 * 
 */
$DR = '/home/tes-sev/art-festival.net/public_html';

//require_once $DR."/ekoda/DAO/Common.php";
require_once $DR."/ecoda/DAO/Dbconnect.php";
//require_once $DR."/ekoda/sys/Session.php";
Class MstCategories extends Dbconnect
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

    public function getThirdCategoryDataById($sub_root_category_id = 0){
        $SQL =<<<EOF
SELECT 
id, root_category_id, sub_root_category_id, parent_category_id, title_ja, title_en
FROM 
mst_categories 
WHERE 
sub_root_category_id = ?
ORDER BY 
root_category_id ASC,
sort_id ASC
EOF;

        try{
            $sth = $this->CON->prepare($SQL);
            $sth->execute(array($sub_root_category_id));
            $RES = $sth->fetchAll();
//            echo "<pre>";$sth->debugDumpParams();echo "</pre>";
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
        return $RES;
    }

    public function getCategoryDataById($root_category_id = 0){
        $SQL =<<<EOF
SELECT 
id, root_category_id, sub_root_category_id, parent_category_id, title_ja, title_en
FROM 
mst_categories 
WHERE 
root_category_id = ?
AND
sub_root_category_id = 0
ORDER BY 
root_category_id ASC,
sort_id ASC
EOF;

        try{
            $sth = $this->CON->prepare($SQL);
            $sth->execute(array($root_category_id));
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

        $stmt = $this->CON->prepare("INSERT INTO `tessev_artfestival`.`mst_categories` (`id`, `is_disable`, `root_category_id`, `sub_root_category_id`, `parent_category_id`, `title`, `content`, `updatetime`, `createtime`) VALUES (NULL, :is_disable, :root_category_id, sub_root_category_id, :parent_category_id, :title, :content, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        try{
            $stmt->bindParam(':is_disable',$postData['is_disable']);
            $stmt->bindParam(':root_category_id',$postData['root_category_id']);
            $stmt->bindParam(':sub_root_category_id',$postData['sub_root_category_id']);
            $stmt->bindParam(':parent_category_id',$postData['parent_category_id']);
            $stmt->bindParam(':title',$postData['title']);
            $stmt->bindParam(':content',$postData['content']);
            $stmt->execute();

        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
    }


    public function getAll($categories = []){
        $RES = null;
        $SQL0 =<<<EOF
SELECT
 * FROM mst_categories 
WHERE 
is_disable = 0 
ORDER BY 
id ASC,
root_category_id ASC,
sub_root_category_id ASC,
parent_category_id ASC
EOF;
// 音楽	美術		趣味	文化	エンターテインメント		技術
/*
define('ART_CATEGORIES', 
    [
        1 => [0 => '音楽', 1 => 'musice'],
        2 => [0 => '美術', 1 => 'art'],
        3 => [0 => 'エンターテインメント', 1 => 'Entertainment'],
        4 => [0 => '文芸', 1 => 'Literature'],
        5 => [0 => '芸術関連技術', 1 => 'Art-related technologies'],
        6 => [0 => '手芸 園芸 etc', 1 => 'Handicraft gardening etc'],
        7 => [0 => 'その他', 1 => 'Others'],
    ]); 
*/
        $lang = 1;
        $langAryKey = $lang - 1;
        $SQLs = [];
        foreach ($categories as $root_category_id => $names){

            $SQL =<<<EOF
SELECT root_category_id,title FROM `mst_categories` WHERE root_category_id = {$root_category_id}
UNION
SELECT root_category_id,title FROM `mst_categories` WHERE sub_root_category_id = (SELECT sub_root_category_id FROM `mst_categories` WHERE id = {$root_category_id})
            
EOF;
            array_push($SQLs,$SQL);
        }
        $union =<<<EOF

        UNION

EOF;
$SQLu = join($union,$SQLs); 
//echo "<pre>";   echo $SQLu;    echo "</pre>";

        try{
            $sth = $this->CON->prepare($SQLu);
            $sth->execute();
            $RES = $sth->fetchAll();
//echo "<pre>";$sth->debugDumpParams();echo "</pre>";
        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
        return $RES;
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