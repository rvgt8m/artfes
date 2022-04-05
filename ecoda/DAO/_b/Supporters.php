<?php
/**
 * 参加者クラス
 * 
 */
require_once "Dbconnect.php";
Class Supporters extends Dbconnect
{
    public $CON = null;
    public $isReal2Supporter = false;
    public $RES = null;

    function __construct(){
        $Dbconnect = new Dbconnect();
        $this->CON = $Dbconnect->connect();
    }

    public function update($supporter_id = null){
        $SQL =<<<EOF
        UPDATE supporters 
        SET
        username ?,
        password ?,
        status ?,
        email ?,
        pre_entrycode ?,
        name_ja ?,
        name_en ?,
        handle_ja ?,
        handle_en ?,
        introduction_ja ?,
        introduction_en ?,
        shop_ids ?,
        artist_ids ?,
        engineer_ids ?,
        office_ids ?,
        action_group_ids ?,
        modified now(),
        WHERE id = ?
EOF;
    $sth = $this->CON->prepare($SQL);
    unset($_post['mode']);
    array_push($_POST,$supporter_id);
    $sth->execute(array($_POST));
    $sth->execute();

    } 

    public function insert($postData = array()){
        echo "insert";
        /*
INSERT INTO `tessev_artfestival`.`supporters` 
       (`id`, `username`, `password`, `status`, `email`, `pre_entrycode`, `name_ja`, `name_en`, `handle_ja`, `handle_en`, `introduction_ja`, `introduction_en`, `shop_ids`, `artist_ids`, `engineer_ids`, `office_ids`, `action_group_ids`, `created`, `modified`) 
VALUES (NULL, 'dd', 'dd', '-1', 'dd@dd.dd', 'dd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
        */
        $SQL =<<<EOF
            INSERT INTO supporters 
            VALUES (NULL, :username, :password, '-1', :email, :pre_entrycode, NULL, NULL, :handle_ja, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
EOF;
/*
$stmt = $this->CON->prepare("INSERT INTO shops (`id`, `sid`, `pname`, `pname_eng`, `branch_name_ja`, `branch_name_eng`, `map_center_lng`, `map_center_lat`, `zoom`, `lng`, `lat`, `station_ids`, `businness_type`, `businness_type2`, `createtime`, `updatetime`) 
VALUES (null, :sid,:pname,:pname_eng,:branch_name_ja,:branch_name_eng,:map_center_lng,:map_center_lat,:zoom,:lng,:lat,:station_ids,:businness_type,:businness_type2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
*/
        $stmt = $this->CON->prepare($SQL);
        $password = password2Hash($postData['password']);

        try{
            $stmt->bindParam(':username',$postData['username']);
            $stmt->bindParam(':password',$password); 
            $stmt->bindParam(':email',$postData['email']);
            $stmt->bindParam(':pre_entrycode',$_POST[pre_entrycode]);
            $stmt->bindParam(':handle_ja',$postData['handle_ja']);

            $stmt->execute();

        }catch(mysqli_sql_exception $e){
            echo "<hr />SQL error:".$e;
        }
    }

    public function getSupporter($username = '', $password ='', $pre_entrycode =''){ 

        if ($pre_entrycode == '') {
            // 通常ログイン
            $sth = $this->CON->prepare('SELECT * FROM supporters WHERE username = ? AND password = ?');
            $sth->execute(array($username,$password));
        } else if($username != ''&& $password !=''&& $pre_entrycode != ''){
            // 仮登録＝＞本登録
            $sth = $this->CON->prepare('SELECT * FROM supporters WHERE username = ? AND password = ? AND status = -1 AND pre_entrycode = ?');
            $sth->execute(array($username,$password,$pre_entrycode));
        }

        $RES = $sth->fetchAll();
//        echo "DAOsupporters<hr />";
//        var_dump($RES);
        return $RES;
	}



/*
        if ($pre_entrycode == '') {
            // 通常ログイン
            $stmt = $CON->prepare($SQL . $WHERE);
            $stmt->bind_param(":username",$username);
            $stmt->bind_param(":password",$password);
        } else {
            // 仮登録ー＞本登録時
            $isReal2Supporter = true;
            $WHERE .= " AND pre_entrycode = ?";
            $stmt = $this->CON->prepare($SQL . $WHERE);
            $stmt->bind_param("sss",$username,$password,$pre_entrycode);
        }
        echo "<hr color=green />";
//        $stmt = mysqli_prepare($this->CON, "SELECT `supporters.pre_entrycode` FROM `supporters` ");
        $stmt = mysqli_prepare($this->CON, "SELECT * FROM `supporters` ");
echo "<pre>";
        var_dump( $this->CON );
        echo "</pre>";
$city = "Amersfoort";
*/
    




/*
    
echo $username."<br />";;
echo $password."<br />";;
echo $pre_entrycode."<br />";;

        $SQL = "SELECT username,pre_entrycode FROM supporters WHERE username = ? AND passwowrd = ? AND pre_entrycode = ?";

        $stmt->bind_param("sss",$username,$password,$pre_entrycode);
        echo "<pre>";
$stmt = mysqli_prepare($this->CON, $SQL);
var_dump($stmt);
echo "</pre>";
        if ($stmt = mysqli_prepare($this->CON, $SQL)) {

            $stmt->bind_param("sss",$username,$password,$pre_entrycode);

            $stmt->execute();
            echo "<pre>";
            var_dump($smpt);
            echo "</pre>";
            $stmt->bind_result($col1, $col2);
            
            while ($stmt->fetch()) {
                printf("%s %s\n", $col1, $col2);
            }
            
            $stmt->close();
        }else {
            echo 88;
        }
        */
    
}

/*
            mysqli_stmt_bind_param($stmt, "sss", $username,$passwowrd,$pre_entrycode);
        

            mysqli_stmt_execute($stmt);


        $SQL = "SELECT * FROM supporters";
        $where = " WHERE";
        
        $WHERE .= " username =  ?";
        $WHERE .= " AND password = ?";
        if ($pre_entrycode == '') {
            // 通常ログイン
            $stmt = $CON->prepare($SQL . $WHERE);
            $stmt->bind_param(":username",$username);
            $stmt->bind_param(":password",$password);
        } else {
            // 仮登録ー＞本登録時
            $isReal2Supporter = true;
            $WHERE .= " AND pre_entrycode = ?";
            $stmt = $this->CON->prepare($SQL . $WHERE);
            $stmt->bind_param("sss",$username,$password,$pre_entrycode);
        }
        if($RES = $stmt->execute()){
            echo "<pre>";
            var_dump($RES);
            echo "</pre>";
            //return $RES;
        }

        */