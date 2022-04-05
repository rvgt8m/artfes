<?php

//require_once "Common.php";
Class Dbconnect {
    private $server = "mysql307b.xserver.jp";
    private $user = "tessev_af";
    private $password = "twvgaf8787250vg";
    private $db_name = "tessev_artfestival";
    private $CON = null;

    function __construct(){

    }
    function connect(){       

        $dsn = 'mysql:dbname='.$this->db_name.';host='.$this->server;
        $user = 'testuser';
        $password = 'testuser';
        
        try{
            $this->CON = new PDO($dsn, $this->user, $this->password);
        
            print('<br>');
        
            if ($dbh == null){
            }else{
            }
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }



//        try{ 
  /*          
echo $this->db_name."<br>";
echo $this->user."<br>";
echo $this->password."<br>";
*/
/*
        //    $this->CON = new PDO('mysql:host='.$this->server
        //    .';dbname='.$this->db_name.';charset=utf8', $this->user, $this->password);

            $this->CON=mysqli_connect ($this->server, $this->user, $this->password,$this->db_name) or die ('I cannot connect to the database because: ' . mysql_error());
        //    mysqli_select_db($this->CON,$this->db_name);
            return $this->CON;
        } catch(Exception $e) {
            die('エラーメッセージ：'.$e->getMessage());
        }
        */


//    }
/*
    $CON=mysqli_connect ($this->server ,$this->user, $this->password) or die ('I cannot connect to the database because: ' . mysql_error());
    if (!(mysqli_select_db($this->server,$this->db_name))) {
        die;
    }
    
    //mysqli_query('SET NAMES utf8', $CON ); # この行を追加する
    */
    var_dump($CON);
    return $this->CON;
    }
}

            /*
            $this->CON = new PDO(
                'dbname='.$this->db_name.';mysql:host='.$this->server.';charset=utf8',
                'tessev_artuser',
                'dignityartfes',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
            $this->CON = new PDO("mysql:host=".$this->server."; dbname=".$this->db_name."; charset=utf8", 'tessev_artuser', 'dignityartfes');

            */
