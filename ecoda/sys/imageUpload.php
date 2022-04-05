<?
echo 555;
$DR=$_SERVER[DOCUMENT_ROOT];
$DR='../';
/*
define  (FUNCTION_PATH, $DR.'/_func/');
@include (FUNCTION_PATH.'connect_db.php');
@include (FUNCTION_PATH.'http_vars_set.php');
@include (FUNCTION_PATH.'select_seek.php');
@include (FUNCTION_PATH.'select_mst_i.php');

@include (FUNCTION_PATH.'q_insert_line.php');
@include (FUNCTION_PATH.'q_update_line.php');
@include (FUNCTION_PATH.'q_delete_line.php');

@include (FUNCTION_PATH.'detect.php');
@include (FUNCTION_PATH.'str_check_sep.php');
@include (FUNCTION_PATH.'make_password.php');

@include("./mst/Ar_vegeType.php");
//@include("./mst/Ar_vegeReason.php");
@include("./mst/Ar_pref.php");
@include("./mst/Ar_ward.php");
@include(FUNCTIONS_PATH.'toAge.php');
@include('./_auth/path.php');

@include("../mst/Ar_vegeType.php");
//@include("./mst/Ar_vegeReason.php");
@include("./mst/Ar_pref.php");
@include("../mst/Ar_ward.php");
@include("./mst/common.php");

@session_start();
$staff_id		=$_SESSION['SESstaffID'];
$shop_id			=$_SESSION['SESshopID'];
$name_e			=$_SESSION['SESstaffNAMEe'];
$name_j			=$_SESSION['SESstaffNAMEj'];
$status_id		=$_SESSION['SESstaffSTATUS'];
$pref_ids		=$_SESSION['SESstaffPREFIDS'];

$viewName		=$_SESSION['SESname'];


$CON=connect_db();

require (FUNCTION_PATH.'session_set_shop_admin.php');

if($status_id==3){
	$RV[shop_id]=$shop_id;
}
@include('../_mst/Ar_pref.php');

$shop_id=$RV[shop_id];#252;
$limitComment=3000;
*/
if($RV[l]==''){
	$lang=1;
}

/*
CREATE TABLE `slideShow` (
  `photo_id` int(11) NOT NULL auto_increment,
  `shop_id` int(11) NOT NULL default '0',
  `photoGenre` tinyint(4) NOT NULL default '0',
  `menuGenre` text,
  `menuGenreTxt_j` text NOT NULL,
  `menuGenreTxt_e` text NOT NULL,
  `is_rowfood` tinyint(4) default NULL,
  `timeOfMenu` tinyint(4) NOT NULL default '0',
  `vegeLevel` text,
  `vegeLevelTxt_j` text,
  `vegeLevelTxt_e` text,
  `is_main` tinyint(4) default '0',
  `is_slide` tinyint(4) default '0',
  `sort_id` double default '0',
  `image_time` text,
  `photoUrl` varchar(255) default NULL,
  `price` int(11) NOT NULL default '0',
  `title_j` varchar(255) default NULL,
  `title_e` varchar(255) default NULL,
  `note_j` text,
  `note_e` text,
  `researchDate` date default NULL,
  `cameraman_id` int(11) default '0',
  PRIMARY KEY  (`photo_id`)
) TYPE=MyISAM AUTO_INCREMENT=102 ;


if($RV[mode]==f){
#	$GP=array();
	foreach ($RV as $key => $val) {
		if(
			'menuGenre'==$key
			||
			'menuGenre'==$key
			||
			'menuGenreTxt_j'==$key
			||
			'menuGenreTxt_e'==$key
			||
			'vegeLevel'==$key
			||
			'vegeLevelTxt_j'==$key
			||
			'vegeLevelTxt_e'==$key
			||
			'price'==$key
			||
			'title_j'==$key
			||
			'title_e'==$key
			||
			'note_j'==$key
			||
			'note_e'==$key
		){
#			$RV[$key]=htmlspecialchars(mb_convert_kana($val,"rnask",'utf-8'));
#			$RV[$key]=htmlspecialchars($val);
		}
	}
#	$RV=$GP;
}





$LT='_j';
if($lang!=1){
	$LT='_e';
}

$limitSelfPromotion=200;

list($SIe,$SIl,$SIt)=select_seek ($CON,'company_basic','','','',$WHEREp,' ORDER BY shop_id DESC');

list($SFe,$SFl,$SFt)=select_seek ($CON,'company_basic','','',''," WHERE shop_id='".$RV[shop_id]."' ",' ORDER BY shop_id DESC');

*/
/*
if($_POST[mode]=='f'){#echo x;
#session_destroy();
	session_start();
	foreach($_POST as $key => $val){
		$RV[$key]=$_SESSION["S_".$key]=$val;
	}
}else{#echo a;
	@session_start();
	if($_SESSION['S_name']){#echo b;
		#  session_destroy();
		# セッション格納する値：mem_id、会員ステータス、マイページDIR名、ハンドル、

		# セッション変数の値を更新する。
		foreach($_SESSION as $key => $val){
			list($k0,$k1)=explode('S_',$key);
			$RV[$k1]=$_SESSION[$key]=$val;
		}

	}
}
*/

/*
session_start();
$shop_id=$_SESSION['wSESDMEMEid'];
*/
/*

CREATE TABLE `slideShow` (
  `photo_id` int(11) NOT NULL auto_increment,
  `shop_id` int(11) NOT NULL default '0',
  `photoGenre` tinyint(4) NOT NULL default '0',
  `timeOfMenu` tinyint(4) NOT NULL default '0',
  `vegeLevel` tinyint(4) NOT NULL default '0',
  `is_main` tinyint(4) default '0',
  `is_slide` tinyint(4) default '0',
  `sort_id` double default '0',
  `imagetime` text,
  `photoUrl` varchar(255) default NULL,
  `price` int(11) NOT NULL default '0',
  `title_j` varchar(255) default NULL,
  `title_e` varchar(255) default NULL,
  `note_j` text,
  `note_e` text,
  `researchDate` date default NULL,
  PRIMARY KEY  (`photo_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;


*/
/*
if(count($shop_id)!='0'){
	@include("./_inc/common.php");
}else{
	@session_destroy();
	header("location:http://vege-navi.jp/");
}

include('../mst/Ar_photo.php');

for($r=0;$r<count($vegeTypeAr);$r++){
	$vegeTypeAr[$r]=@mb_convert_encoding($vegeTypeAr[$r],'utf-8','SJIS');
}
for($r=0;$r<count($photoGenreAr);$r++){
	$photoGenreAr[$r]=@mb_convert_encoding($photoGenreAr[$r],'utf-8','SJIS');
}

for($r=0;$r<count($timeOfMenuAr);$r++){
	$timeOfMenuAr[$r]=@mb_convert_encoding($timeOfMenuAr[$r],'utf-8','SJIS');
}


list($TSe,$TSl,$TSt)=select_seek ($CON,'restaurant_type','','','',' WHERE is_view=1 AND sort_id BETWEEN 1 AND 19',' ORDER BY sort_id ASC');
*/
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#
$max_filesize = 8242880;

$imgListW = 80;
$imgListH = 60;

$img300W = 300;
$img300H = 225;

$img600W=600;
$img600H=450;

# for first set
$shop_id = 66;
$IPFpList = '../_imgDS/'.$shop_id.'pl.jpg';
$IPFp300	 = '../_imgDS/'.$shop_id.'p3.jpg';
$IPFpBIG	 = '../_imgDS/'.$shop_id.'pB.jpg';
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#

if($_POST[mode]=='f'){#

	$image_time		=	$RV[image_time]	= time();
	$alertTxt1=$alertTxt2=$alertTxt3='';

	$is_upfile=0;
	$IR1=false;

	@chmod($IPFp,0777);
	@unlink($IPFp);


	@chmod($IPFpm,0777);
	@unlink($IPFpm);

	@chmod($IPFpa,0777);
	@unlink($IPFpa);

	$userfile = $_FILES["upfile"]["size"];
	$userfile_type = $_FILES["upfile"]["type"];
//	$userfile_name = preg_replace('_','',strtolower($_FILES["upfile"]["name"]));
	$userfile_name = strtolower($_FILES["upfile"]["name"]);
	$imsrc=	$userfile_tmpname = $_FILES["upfile"]["tmp_name"];

	list($width,$height)=getimagesize($userfile_tmpname);

	if($userfile > 0){#echo "b<hr>";
		$IRL=$IR300=$IRB=false;
		if($userfile > $max_filesize){#echo "c<hr>";
				 $img_reso_comment .="<span class=alt>[画像1]ファイスサイズがオーバーしています。</span>";
		}else{
			$RV[is_upfile]=1;

			# 元画像の幅が300w以上大きいかどうか
			if( $width<$img300W || $height<$img300H){	# 小さい場合は画像処理取りやめで、アラートテキストを書き出す
				if( $width<$img300W){
					$WH='幅';
				}
				if( $height<$img300H){
					$WH='高さ';
				}
				$img_reso_comment .="<span class=alt>[アップロード画像]の".$WH."が足りません。</span>";
			}else{	# 元画像の幅が300w以上大きい

				# 画像ファイルタイプを取得
				list($mime,$mime_type) = explode('/',$userfile_type);
				switch($mime_type){
					case "png":
					case "x-png":
						$extension = ".png";
						break;
					case "jpeg":
					case "jpg":
					case "pjpeg":
						$extension = ".jpg";
						break;
					case "gif":
					case "pgif":
						$extension = ".gif";
						break;
					default:
						break;
				}

				# それらサイズの画像オブジェクトを生成
				if('.jpg'==$extension){#echo "%%%%%%%%%";
					$imsrc80 = $imsrc300 = $imsrcB = @ImageCreateFromJpeg($userfile_tmpname);
				}
				if('.png'==$extension){
					$imsrc80 = $imsrc300 = $imsrcB =@ImageCreateFromPng($userfile_tmpname);
				}
				if('.gif'==$extension){
					$imsrc80 = $imsrc300 = $imsrcB =@ImageCreateFromGif($userfile_tmpname);
				}

				# サムネイル等の各画像の幅、高さを算出

				$normalSize = (4/3 == $width/$height )? true:false;

				# リサイズ
				$is_tatenaga=false;
				$is_habanaga=false;
				$startSrcW=$startSrcY=$startSrcYBig=0;
 
				$trimmingWidth=$width;
				$trimmingHeight=$height;

				if((4/3) > ($width/$height)){
//echo "縦長";
					$is_tatenaga=true;
					$trimmingHeight=$width/4*3;
					$startSrcY=($height-$trimmingHeight)/2;
				}
				if((4/3) == ($width/$height)){
//echo "4 : 3";
					$trimmingHeight=$width/4*3;
					$startSrcY=0;
				}
				if((4/3) < ($width/$height)){
					$is_habanaga=true;
					$trimmingWidth	=floor(4 * ( $height / 3 ) );
					$startSrcW	=floor( ( $width - $trimmingWidth ) / 2 );
				}
				$trimmingWidthBig=					$trimmingWidth;
				if($width > $img600W){	# BIGサイズ画像の幅が600以上の場合の高さを算出
					$trimmingWidthBig=$width-$img600W;
					if($is_tatenaga){
						$trimmingWidthBig=$width;
					}
					$newSizeBigH=floor($height*$img600W/$width);
					if( $height == ( $width / 4 * 3 ) ){
						$trimmingWidthBig=$width;
					}
				}else{

					if($extension==".jpg"){#echo "<hr color=red />";
						$IRB=copy($userfile_tmpname,$IPFpBIG);
					}
				}

				$imL =  @ImageCreateTrueColor($imgListW,$imgListH );
				$im3 =  @ImageCreateTrueColor($img300W,$img300H );
				$imB =  @ImageCreateTrueColor($img600W,$newSizeBigH );

				ImageCopyResized($imL, $imsrc80, 0 , 0, $startSrcW, $startSrcY, $imgListW,$imgListH, $trimmingWidth, $trimmingHeight);

				$IRL=imagejpeg($imL,$IPFpList,100);

			  	ImageCopyResized($im3, $imsrc300, 0 , 0, $startSrcW, $startSrcY, $img300W,$img300H, $trimmingWidth, $trimmingHeight);
				$IR300=imagejpeg($im3,$IPFp300,100);

				if(!$IRB){
					if($is_habanaga==true){
						$startSrcW=$startSrcY=0;
						$trimmingWidth=$width;
					}
					ImageCopyResized($imB, $imsrcB, 0 , 0, $startSrcW, $startSrcYBig, $img600W,$newSizeBigH, $width, $height);
					$IRB=imagejpeg($imB,$IPFpBIG,100);
				}
			}
		}
	}
	if($IRB || $is_copy==true){
		$RV[is_upfile]=1;
	}else{
		$RV[is_upfile]='';
	}

}
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#




if($_POST[mode]=='' && $_GET[photo_id]!=''){
	$RV[photo_id]=$_GET[photo_id];
	$WHERE=" WHERE photo_id ='".$RV[photo_id]."'";
	list($WRe,$WRl,$WRt)=select_seek ($CON,'slideShow','','','1',$WHERE,'');

	if($WRt>0){
		$RV[photoGenre]			= $WRl[0][photoGenre];
		$RV[menuGenre]				= $WRl[0][menuGenre];
		$RV[menuGenreTxt_j]		= html_entity_decode($WRl[0][menuGenreTxt_j], ENT_QUOTES);
		$RV[menuGenreTxt_e]		= html_entity_decode($WRl[0][menuGenreTxt_e], ENT_QUOTES);
		$RV[is_rowfood]			= $WRl[0][is_rowfood];
		$RV[timeOfMenu]			= $WRl[0][timeOfMenu];
		$RV[vegeLevel]				= $WRl[0][vegeLevel];
		$RV[vegeLevelTxt_j]		= html_entity_decode($WRl[0][vegeLevelTxt_j], ENT_QUOTES);
		$RV[vegeLevelTxt_e]		= html_entity_decode($WRl[0][vegeLevelTxt_e], ENT_QUOTES);
		$RV[is_main]				= $WRl[0][is_main];
		$RV[is_slide]				= $WRl[0][is_slide];
		$RV[sort_id]				= $WRl[0][sort_id];
		$RV[image_time]			= $WRl[0][image_time];

		$RV[image_time_old]		= $image_time					= $WRl[0][image_time];

		$RV[photoUrl]				= $WRl[0][photoUrl];
		$RV[price]					= $WRl[0][price];


		$RV[title_j]				= html_entity_decode($WRl[0][title_j], ENT_QUOTES);
		$RV[title_e]				= html_entity_decode($WRl[0][title_e], ENT_QUOTES);
		$RV[note_j]					= html_entity_decode($WRl[0][note_j], ENT_QUOTES);
		$RV[note_e]					= html_entity_decode($WRl[0][note_e], ENT_QUOTES);
		$RV[researchDate]			= $WRl[0][researchDate];
		$RV[cameraman_id]			= $WRl[0][cameraman_id];

		list($RV[y],$RV[m],$RV[d])=explode('-',$RV[researchDate]);

		$menuGenreAr=explode(',',$RV[menuGenre]);
		$type_idAr=array();
		for($r=0;$r<$TSt;$r++){
			for($t=0;$t<count($menuGenreAr);$t++){
				if($menuGenreAr[$t]==$TSl[$r][type_id]){
					array_push($type_idAr,$TSl[$r][type_id]);
				}
			}
		}
		$RV[type_ids]=join(',',$type_idAr);
		$RV[type_ids]=$RV[menuGenre];
	}

}

if($_POST[mode]=='' && $_GET[photo_id]==''){
		$RV[photoGenre]			= "";
		$RV[timeOfMenu]			= "";
		$RV[vegeLevel]				= "";
		$RV[vegeLevelTxt_j]		= "";
		$RV[vegeLevelTxt_e]		= "";
		$RV[is_main]				= "";
		$RV[is_slide]				= "";
		$RV[sort_id]				= "";
		$RV[photoUrl]				= "";
		$RV[price]					= "";
		$RV[title_j]				= "";
		$RV[title_e]				= "";
		$RV[note_j]					= "";
		$RV[note_e]					= "";
		$RV[y]						= "";
		$RV[m]						= "";
		$RV[d]						= "";


}
/*
if($_POST[mode]=='f'){
		$RV[photoGenre]			= "";
		$RV[timeOfMenu]			= "";
		$RV[vegeLevel]				= "";
		$RV[vegeLevelTxt_j]		= html_entity_decode($RV[vegeLevelTxt_j], ENT_QUOTES);
		$RV[vegeLevelTxt_e]		= html_entity_decode($RV[vegeLevelTxt_e], ENT_QUOTES);
		$RV[is_main]				= "";
		$RV[is_slide]				= "";
		$RV[sort_id]				= "";
		$RV[photoUrl]				= "";
		$RV[price]					= "";
		$RV[title_j]				= html_entity_decode($RV[title_j], ENT_QUOTES);
		$RV[title_e]				= html_entity_decode($RV[title_e], ENT_QUOTES);
		$RV[note_j]					= html_entity_decode($RV[note_j], ENT_QUOTES);
		$RV[note_e]					= html_entity_decode($RV[note_e], ENT_QUOTES);
		$RV[y]						= "";
		$RV[m]						= "";
		$RV[d]						= "";
}
*/
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#

if($_POST[mode]=='c' || $_POST[mode]=='s'){
	$type_idAr=array();
	for($r=0;$r<$TSt;$r++){
		if($RV['type_id'.$r]!=''){
			array_push($type_idAr,$RV['type_id'.$r]);
		}
	}
	$RV[type_ids]=join(',',$type_idAr);

	$voteAr=array();
	for($r=0;$r<count($vegeTypeAr);$r++){
		if($RV['vegeType'.$r]!=''){
			array_push($voteAr,$RV['vegeType'.$r]);
		}
	}
	$RV[vegeLevel]=join(',',$voteAr);
}


if($_POST[mode]=='s'){
 
	$where =" WHERE photo_id ='".$RV[photo_id]."'";
	if($_POST[is_del]==1 && $_POST[photo_id] >0 ){
		list($erw,$sql)=q_delete_line($CON,'slideShow',$where);
	}else{
		if($_POST[is_upfile]==1){#echo "new".
			$RV[image_time]=$_POST[image_time];
		}else{#echo "old=".
			$RV[image_time]=$_POST[image_time_old];
		}

		$type_idAr=array();
		for($r=0;$r<$TSt;$r++){
			if($RV['type_id'.$r]!=''){
				array_push($type_idAr,$RV['type_id'.$r]);
			}
		}

		$RV[menuGenre]=join(',',$type_idAr);
		if($_POST[photo_id]==''){
/*
CREATE TABLE `slideShow` (
  `photo_id` int(11) NOT NULL auto_increment,
  `shop_id` int(11) NOT NULL default '0',
  `photoGenre` tinyint(4) NOT NULL default '0',
  `menuGenre` text,
  `menuGenreTxt_j` text NOT NULL,
  `menuGenreTxt_e` text NOT NULL,
  `is_rowfood` tinyint(4) default NULL,
  `timeOfMenu` tinyint(4) NOT NULL default '0',
  `vegeLevel` text,
  `vegeLevelTxt_j` text,
  `vegeLevelTxt_e` text,
  `is_main` tinyint(4) default '0',
  `is_slide` tinyint(4) default '0',
  `sort_id` double default '0',
  `image_time` text,
  `photoUrl` varchar(255) default NULL,
  `price` int(11) NOT NULL default '0',
  `title_j` varchar(255) default NULL,
  `title_e` varchar(255) default NULL,
  `note_j` text,
  `note_e` text,
  `researchDate` date default NULL,
  `cameraman_id` int(11) default '0',
  PRIMARY KEY  (`photo_id`)
) TYPE=MyISAM AUTO_INCREMENT=5 ;

*/
		 	$values="".

			"'',".
			"'".$shop_id."',".
			"'".$RV[photoGenre]."',".
			"'".$RV[menuGenre]."',".
			"'".htmlspecialchars($RV[menuGenreTxt_j], ENT_QUOTES)."',".
			"'".htmlspecialchars($RV[menuGenreTxt_e], ENT_QUOTES)."',".
			"'".$RV[is_rowfood]."',".
			"'".$RV[timeOfMenu]."',".
			"'".$RV[vegeLevel]."',".
			"'".htmlspecialchars($RV[vegeLevelTxt_j], ENT_QUOTES)."',".
			"'".htmlspecialchars($RV[vegeLevelTxt_e], ENT_QUOTES)."',".
			"'".$RV[is_main]."',".
			"'".$RV[is_slide]."',".
			"'".$RV[sort_id]."',".
			"'".$RV[image_time]."',".
			"'".$RV[photoUrl]."',".
			"'".$RV[price]."',".

			"'".htmlspecialchars($RV[title_j], ENT_QUOTES)."',".
			"'".htmlspecialchars($RV[title_e], ENT_QUOTES)."',".
			"'".htmlspecialchars($RV[note_j], ENT_QUOTES)."',".
			"'".htmlspecialchars($RV[note_e], ENT_QUOTES)."',".

			"'".$RV[y]."-".$RV[m]."-".$RV[d]."',".
			"'".$RV[cameraman_id]."'".
			"";
		
			list($erw,$RV[photo_id])=q_insert_line($CON,'slideShow','',$values);
		
		}else{
	
		 	$values="".
			"photoGenre						= '".$RV[photoGenre]."',".
			"menuGenre						= '".$RV[menuGenre]."',".
			"menuGenreTxt_j				= '".htmlspecialchars($RV[menuGenreTxt_j], ENT_QUOTES)."',".
			"menuGenreTxt_e				= '".htmlspecialchars($RV[menuGenreTxt_e], ENT_QUOTES)."',".
			"is_rowfood						= '".$RV[is_rowfood]."',".
			"timeOfMenu						= '".$RV[timeOfMenu]."',".
			"vegeLevel						= '".$RV[vegeLevel]."',".
			"vegeLevelTxt_j				= '".htmlspecialchars($RV[vegeLevelTxt_j], ENT_QUOTES)."',".
			"vegeLevelTxt_e				= '".htmlspecialchars($RV[vegeLevelTxt_e], ENT_QUOTES)."',".
			"is_main							= '".$RV[is_main]."',".
			"is_slide						= '".$RV[is_slide]."',".
			"sort_id							= '".$RV[sort_id]."',".
			"image_time						= '".$RV[image_time]."',".
			"photoUrl						= '".$RV[photoUrl]."',".
			"price							= '".$RV[price]."',".
			"title_j							= '".htmlspecialchars($RV[title_j], ENT_QUOTES)."',".
			"title_e							= '".htmlspecialchars($RV[title_e], ENT_QUOTES)."',".
			"note_j							= '".htmlspecialchars($RV[note_j], ENT_QUOTES)."',".
			"note_e							= '".htmlspecialchars($RV[note_e], ENT_QUOTES)."',".
			"researchDate					= '".$RV[y]."-".$RV[m]."-".$RV[d]."',".
			"cameraman_id					= '".$RV[cameraman_id]."'".
			"";
		
			list($erw,$sql)=q_update_line($CON,'slideShow',$values,$where);

		}



	}
	if($erd==0 && $erp==0){
		$alertTxt="登録完了致しました。";
		if($RV[is_del]>0){
		$alertTxt="削除完了致しました。";
		}
	}else{
//		$alertTxt="<span class=alt>登録完了しませんでした。恐れ入りますが、再度登録作業をお願いいたします。</span>";
	}
}
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#




if($RV[is_upfile]!=1){

	$image_time		=$_POST[image_time];#		= $WRl[0][image_time];
}
if($RV[is_upfile]==1){
	$image_time;
}
if($_POST[mode]==''){
	$image_time				= $WRl[0][image_time];
}
#echo "<br />IPFList=".
$IPFList	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time].'l.jpg';
#echo "<br />IPFpList=".
$IPFpList;


/**/
#echo "<br />IPFm=".
$IPF300	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time].'d.jpg';
#echo "<br />IPFa=".
$IPFBIG	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time].'b.jpg';

#echo "<hr />IPFold=".
$IPFListOld	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time_old].'l.jpg';
#echo "<br />IPFsold=".
$IPF300Old	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time_old].'d.jpg';
$IPFBIGOld	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time_old].'b.jpg';

if($RV[mode]=='f' && $RV[is_upfile]!=1){
	$IPFList	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$image_time.'l.jpg';
	#echo "<br />IPFm=".
	$IPF300	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$image_time.'d.jpg';
	#echo "<br />IPFa=".
	$IPFBIG	 = '../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$image_time.'b.jpg';

}
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#






if($_POST[mode]=='s'


){#echo "====photoGenre=".$RV[photoGenre];

	if($RV[photoGenre]==1 && $RV[is_main]==1 ){#echo "HERE";
		$newOldList	 = '../imgUl/'.$shop_id.'_2s_'.$RV[image_time].'.jpg';
		@copy($IPFpList,$newOldList);
	
		$newOld300	 = '../imgUl/'.$shop_id.'_2_'.$RV[image_time].'.jpg';
		@copy($IPFp300,$newOld300);

		$SQL="UPDATE company_basic SET ".
		" mainImgIdDish					= '".$RV[photo_id]."', ".
		" imgTime2					= '".$RV[image_time]."' ".
		" WHERE shop_id 			= '".$RV[shop_id]."'";
		$RES=mysql_query($SQL,$CON);
	}

	if($RV[photoGenre]==2 && $RV[is_main]==1 ){

		$newOldList	 = '../imgUl/'.$shop_id.'_3s_'.$RV[image_time].'.jpg';
		@copy($IPFpList,$newOldList);

		$newOld300	 = '../imgUl/'.$shop_id.'_3_'.$RV[image_time].'.jpg';
		@copy($IPFp300,$newOld300);

		$SQL="UPDATE company_basic SET ".
		" mainImgIdSweets			= '".$RV[photo_id]."', ".
		" imgTime3				= '".$RV[image_time]."' ".
		" WHERE shop_id 			= '".$RV[shop_id]."'";
		$RES=mysql_query($SQL,$CON);


		if($_POST[is_upfile]!=1){

			# imgUl/5_3s_20081102235304.jpg
			# _imgDS/216_5_1241019236l.jpg

			$IPFListUpdated ='../_imgDS/'.$shop_id.'_'.$RV[photo_id].'_'.$RV[image_time].'l.jpg';
			@copy($IPFListUpdated,$newOldList);
		
		}

	}

	@rename($IPFpList, $IPFList);
	@rename($IPFp300, $IPF300);
	@rename($IPFpBIG, $IPFBIG);

	@unlink($IPFp);
	@unlink($IPFpList);
	@unlink($IPFp300);
	@unlink($IPFpBIG);

}
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#


#################################################################################################################
$UA = getenv("HTTP_USER_AGENT");
$RF = getenv("HTTP_REFERER");

$RA = getenv("REMOTE_ADDR");
$RH = gethostbyaddr($RA);

$is_mac=$is_macIE=$is_winIE=$is_winOpera=$is_opera=$is_winFirefox=$is_macFirefox=$is_macSafari=false;
$br='';
if($is_mac){
	$br='<br />';
}
#$is_mac=true;

#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#

$limit=100;

$WHERE=" WHERE shop_id ='".$shop_id."'";
//list($WSe,$WSl,$WSt)=select_seek ($CON,'slideShow','','',$limit,$WHERE,'');


$UA = getenv("HTTP_USER_AGENT");
$RF = getenv("HTTP_REFERER");

$RA = getenv("REMOTE_ADDR");
$RH = gethostbyaddr($RA);
?>









<?if( $_POST[mode]=='f'){####################################################################################

	$ac=0;

?>




<?

		if($RV[is_upfile]!=1){
			if(file_exists($IPFList)){
				list($width, $height, $type, $attr) = @getimagesize($IPFList);
?>
<img src='<?=$IPFList?>' <?=$attr?>>
<?
			}

			if(file_exists($IPF300)){
				list($width, $height, $type, $attr) = @getimagesize($IPF300);
?>
<img src='<?=$IPF300?>' <?=$attr?>>
<?
			}
			if(file_exists($IPFBIG)){
				list($width, $height, $type, $attr) = @getimagesize($IPFBIG);
?>
<img src='<?=$IPFBIG?>' <?=$attr?>>
<?
			}
		}


		if($img_reso_comment!=''){
			$ac++;
			echo $img_reso_comment;
		}

		if($RV[is_upfile]==1){
			if(file_exists($IPFpList)){
				list($width, $height, $type, $attr) = @getimagesize($IPFpList);

?>
<img src="<?echo $IPFpList;?>?<?=time()?>' <?=$attr?>>
<?
			}

			if(file_exists($IPFp300)){
				list($width, $height, $type, $attr) = @getimagesize($IPFp300);
?>
<img src='<?=$IPFp300?>?<?=time()?>' <?=$attr?>>
<?
			}
			if(file_exists($IPFpBIG)){
				list($width, $height, $type, $attr) = @getimagesize($IPFpBIG);
?>
<img src='<?=$IPFpBIG?>?<?=time()?>' <?=$attr?>>
<?
			}


		}
?>







<?php }?>