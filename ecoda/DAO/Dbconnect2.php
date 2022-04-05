<?php

//require_once "Common.php";
Class Dbconnect2 {
    private $server = "mysql307b.xserver.jp";
    private $user = "tessev_af";
    private $password = "twvgaf8787250vg";
    private $db_name = "tessev_artfestival";
    private $CON = null;

    function __construct(){

    }
    function connect(){       
        $dsn = 'mysql:dbname='.$this->db_name.';host='.$this->server;
        
        try{
            $this->CON = new PDO($dsn, $this->user, $this->password);
            
        var_dump($this->CON);
            echo 555;
            if ($dbh == null){
            }else{
            }
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
		return $this->CON;
    }
}

