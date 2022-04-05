<?php

class Contents
{
    private $PDO = null;
    private $tblTarget = null;

    function __construct($PDO,$tblTarget){
        $this->PDO = $PDO;
        echo "<hr />".$tblTarget;echo "<hr />";
        $this->tblTarget = 'contents_'.$tblTarget;
    }
    
    function insert($postData = []){
        $session_key ='supporter_id66_tblTargetartwork_line_id';

        //$session_data = $_SESSION["SESsupporterData"][$session_key];
        //$session_data = $_SESSION["SESsupporterData"][$session_key] ;
        echo "<pre>befpre contents_artwork insert()<br />";var_dump($postData);echo "</pre>";
        $SQL =<<<EOF
    INSERT INTO `:tblTarget` 
    ('id', 'supporter_id', 'prent_content_id', 'sort_id', 'category_main_detail_id', 'category_sub_detail_id', 'is_disable', 'title', 'catchecopy', 'content', 'url', 'is_contact', 'image_name', 'start_date_time', 'end_date_time', 'background_color', 'background_image_id', 'updatetime', 'createtime') 
    VALUES 
    (null, :supporter_id, :prent_content_id, :sort_id, :category_main_detail_id, :category_sub_detail_id, :is_disable, :title, :catchecopy, :content, :url, :is_contact, :image_name, :start_date_time, :end_date_time, :background_color, :background_image_id, :updatetime, :createtime) 
EOF;

echo
$SQL2 =<<<EOF
INSERT INTO `{$this->tblTarget}` (`id`, `supporter_id`, `prent_content_id`, `sort_id`, `category_main_detail_id`,
`category_sub_detail_id`, `is_disable`, `title`, `catchecopy`, `content`, `url`, `is_contact`, `image_name`, `start_date_time`, `end_date_time`, `background_color`, `background_image_id`, `updatetime`, `createtime`) 
VALUES
(null, :supporter_id, :prent_content_id, :sort_id, :category_main_detail_id,
 :category_sub_detail_id, :is_disable, :title, :catchecopy, :content, :url,
 :is_contact, `image_name`, `start_date_time`, `end_date_time`, `background_color`, `background_image_id`, `updatetime`, `createtime`) 
;

EOF;
        try{
            
        echo "<hr color=red />".$postData['title'];echo "<hr />";
            $stmt = $this->PDO->prepare($SQL2);
            $stmt->bindParam(':supporter_id',$postData['supporter_id']);
            $stmt->bindParam(':prent_content_id',$postData['prent_content_id']);
            $stmt->bindParam(':sort_id',$postData['sort_id']);
            $stmt->bindParam(':category_main_detail_id',$postData['category_main_detail_id']);
            $stmt->bindParam(':category_sub_detail_id',$postData['category_sub_detail_id']);
            $stmt->bindParam(':is_disable',$postData['is_disable']);
            $stmt->bindParam(':title',$postData['title']);
            $stmt->bindParam(':catchecopy',$postData['catchecopy']);
            $stmt->bindParam(':content',$postData['content']);
            $stmt->bindParam(':url',$postData['url']);
            $stmt->bindParam(':is_contact',$postData['is_contact']);

                        /*   

            $stmt->bindParam(':image_name',$postData['image_name']);
            $stmt->bindParam(':start_date_time',$postData['start_date_time']);
            $stmt->bindParam(':end_date_time',$postData['end_date_time']);
            $stmt->bindParam(':background_color',$postData['background_color']);
            $stmt->bindParam(':background_image_id',$postData['background_image_id']);
            $stmt->bindParam(':updatetime',date('Y-m-d H:i:s'));
            $stmt->bindParam(':createtime',date('Y-m-d H:i:s'));
            echo "<pre>";$stmt->debugDumpParams();echo "</pre>";
            */
            $stmt->execute();
            //echo "<pre>insert()<br />";var_dump($postData);echo "</pre>";

//            preg_match('/(?<=Sent SQL:).*?(?=Params:)/s', self::pdo_debugStrParams($stmt), $matches);
//            echo "<hr color=red />".$matches[0].'<br />';
// DEBUG OUTPUT;
//print_r($stmt);
            
        }catch(mysqli_sql_exception $e){
            echo "<hr color=blue />SQL error:".$e;
        }
    }
    
    function pdo_debugStrParams($s) {
        ob_start();
        $s->debugDumpParams();
        $r = ob_get_contents();
        ob_end_clean();
        return $r;
    }
}
