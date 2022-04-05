<?
$DR = '/home/tes-sev/art-festival.net/public_html';

require_once $DR."/ekoda/DAO/Common.php";
require_once $DR."/ekoda/DAO/Dbconnect2.php";
require_once $DR."/ekoda/sys/Session.php";
$table_name = "shops";
        $Dbconnect = new Dbconnect2();
        $pdo = $Dbconnect->connect();
        
        
    try {
        $stmt = $pdo->query("SHOW FULL COLUMNS FROM {$table_name}");
        $stmt->execute();
    }
    catch (PDOException $e) {
        ob_clean();
        exit($e->getMessage() . "\n");
    }
    echo "<style>.alert{color:#ff0000;}</style><pre>";
    $formTagsJ = $formTagsE = "";
	$formTagsJ .= $formTagsE .= "<pre><form>";
    while ($row = $stmt->fetch()) {
		list($fieldJpn,$fieldEng) = explode("_/_",$row["Comment"]);

		if(
			$row["Field"] != "id" &&
			$row["Field"] != "sid"
		
		){
			$requiredTxt = ($row["Null"] == "NO")?'<span class=alert>*</span> ':'';
			$formLavel = $requiredTxt.$fieldJpn." ".$fieldEng;
			$formTagsJ .= $formLavel."<br />";
			if(
				strpos($row["type"],'varchar') >=0
			
			
			){
				$formTagsJ .= "<input type='text' name = '".$row["Field"]."'>";
			
			}else{
				if($fieldEng != ""){
					$formTagsE .= "".$fieldEng;
				}
			}
			if(
				$row["type"] == 'text'
			){
				$formTagsJ .= "<textarea' name = '".$row["Field"]."'><?= $".$row["Field"]."'?></textarea>";
			
			}
			$formTagsJ .= "<br />\n";
		
		}
    	//var_dump($row);
    
    }
    

    echo $formTagsJ;
    echo "<hr>";
    echo $formTagsE;
    echo "</pre></form>";
        
        
        
        
        exit;
        

        
        /*
               ["Field"]
        
        ["Type"]
        
        ["Null"]
        
        ["Comment"]
        
          ["Field"]=>
  string(2) "id"
  [0]=>
  string(2) "id"
  ["Type"]=>
  string(7) "int(11)"
  [1]=>
  string(7) "int(11)"
  ["Collation"]=>
  NULL
  [2]=>
  NULL
  ["Null"]=>
  string(2) "NO"
  [3]=>
  string(2) "NO"
  ["Key"]=>
  string(3) "PRI"
  [4]=>
  string(3) "PRI"
  ["Default"]=>
  NULL
  [5]=>
  NULL
  ["Extra"]=>
  string(14) "auto_increment"
  [6]=>
  string(14) "auto_increment"
  ["Privileges"]=>
  string(31) "select,insert,update,references"
  [7]=>
  string(31) "select,insert,update,references"
  ["Comment"]=>
  string(0) ""
  [8]=>
  string(0) ""
}
*/
        
        
        
        
        
        
        
$table_name = "shops";
//$table_stmt = $pdo->prepare("SHOW TABLE STATUS LIKE :table_name");

    try {
        $stmt = $pdo->query("SHOW FULL COLUMNS FROM {$table_name}");
        $stmt->execute();
    }
    catch (PDOException $e) {
        ob_clean();
        exit($e->getMessage() . "\n");
    }

    while ($row = $stmt->fetch()) {
        echo '|';
        foreach ($outputColumns as $column_name) {
            echo "{$row[$column_name]}|";
        }
        echo "\n";
    }
    echo "\n";

exit;

$select = $CON->query('SELECT COUNT(*) FROM shops');
$meta = $select->getColumnMeta(0);
var_dump($meta);


$SQL = "SHOW FULL COLUMNS from shops";
$stmt = $CON->prepare($SQL);
    $stmt->execute();
var_dump($stmt);


/*
Class Shops extends Dbconnect
{
    public $CON = null;
    public $session_supporter_id = null;
    public $isReal2Supporter = false;
    public $RES = null;

    function __construct(){
        $Dbconnect = new Dbconnect();
        $this->CON = $Dbconnect->connect();
        $Session = new Session();
        $session_supporter_data = $Session->getSupporterDataFromSession();
        $this->session_supporter_id = $session_supporter_data['id'];
    }

*/


$DR = '/home/tes-sev/art-festival.net/public_html';

require_once $DR."/ekoda/DAO/Dbconnect2.php";
require_once $DR."/ekoda/sys/Session.php";
$CON = null;

$Dbconnect = new Dbconnect2();
$CON = $Dbconnect->connect();
$Session = new Session();
$session_supporter_data = $Session->getSupporterDataFromSession();
$session_supporter_id = $session_supporter_data['id'];
$argv[1] = "shops";
$tableName = $argv[1];

$SQL = "SHOW FULL COLUMNS from :tableName";
//$stmt = $CON->prepare($SQL);
var_dump($CON);
exit;
try{
    $stmt->bindParam(':tableName',$tableName);
    $stmt->execute();
}catch(mysqli_sql_exception $e){
    echo "<hr />SQL error:".$e;
}
var_dump($stmt);
exit;
/*
$num1 = $argv[1];
$num2 = $argv[2];
echo $num1+$num2;

            $Supporters = new Supporters();
            $Supporters->insert($_POST);

php mvc.php tableName m v/path c/path

【VIEW】
①テーブル構造取得

②VIEWファイル生成
	・フォーム系タグ
	・VIEWファイルへの書き込み
	・モデルファイルへの書き込み
	・パーミッション閉じ
	
③モデルファイル生成
	・INSERTメソッドコード生成
	・UPDATEメソッドコード生成
	・DELETEメソッドコード生成
	・モデルファイルへの書き込み
	・パーミッション閉じ

③コントローラーファイル生成
	・基本コード生成
	・フォームセッション値生成コード
	・add()
	・edit()
	・delete()
	・コントローラーファイルへの書き込み
	・パーミッション閉じ
	
	
*/