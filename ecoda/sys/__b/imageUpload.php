<?
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
/*
&&

$_POST[is_upfile]==1

$photoGenreAr[0]='その他_Other';
$photoGenreAr[1]='料理_Dishe';
$photoGenreAr[2]='ベジスイーツ_Sweets Cake';
$photoGenreAr[3]='カフェ / ドリンク_Cafe / Drink';
$photoGenreAr[4]='店内画像_Inside View';
$photoGenreAr[5]='道筋説明_Route explanation';



$SQL='SELECT * FROM `slideShow` WHERE is_main =1';
$RES= mysql_query($SQL,$CON);
echo
$ROW= mysql_num_rows($RES);
$targetColumn ='';
echo "<pre>";
var_dump($RES);
if($ROW > 0){
	for($r =0;$r<$ROW;$r++){
echo "<hr />photoGenre = ".mysql_result($RES,$r,'photoGenre');
		$targetColumn = (mysql_result($RES,$r,'photoGenre') == 1)?'mainImgIdDish'  :$targetColumn;
		$targetColumn = (mysql_result($RES,$r,'photoGenre') == 2)?'mainImgIdSweets':$targetColumn;
		$targetColumn = (mysql_result($RES,$r,'photoGenre') == 5)?'mainImgIdRoot'  :$targetColumn;

echo "<br />".
		$SQL='UPDATE `company_basic` SET `'.$targetColumn.'` = '.mysql_result($RES,$r,'photo_id').' WHERE shop_id = '.mysql_result($RES,$r,'shop_id');
		mysql_query($SQL);

	}
}


*/







if($_POST[mode]=='s'


){#echo "====photoGenre=".$RV[photoGenre];

	if($RV[photoGenre]==1 && $RV[is_main]==1 ){#echo "HERE";
#	if( $RV[is_main]==1 ){#echo "HERE";
#http://vege-navi.jp/imgUl/23_2s_20081016024031.jpg
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

#################################################################################################################
$UA = getenv("HTTP_USER_AGENT");
$RF = getenv("HTTP_REFERER");

$RA = getenv("REMOTE_ADDR");
$RH = gethostbyaddr($RA);

$is_mac=$is_macIE=$is_winIE=$is_winOpera=$is_opera=$is_winFirefox=$is_macFirefox=$is_macSafari=false;
/*
if(
	ereg('mac',strtolower($UA))
){
	$is_mac=true;
}
if(
	ereg('firefox',strtolower($UA))
){
	$is_mac=true;
}
if(
	ereg('opera',strtolower($UA))
){
	$is_opera=true;
}


if(
	ereg('windows',strtolower($UA))
	&&
	ereg('msie',strtolower($UA))
){
	$is_winIE=true;
}
if(
	ereg('windows',strtolower($UA))
	&&
	ereg('firefox',strtolower($UA))
){
	$is_winFirefox=true;
}
if(
	ereg('windows',strtolower($UA))
	&&
	ereg('opera',strtolower($UA))
){
	$is_winOpera=true;
}

if(
	ereg('mac',strtolower($UA))
	&&
	ereg('msie',strtolower($UA))
){
	$is_macIE=true;
}

if(
	ereg('mac',strtolower($UA))
	&&
	ereg('safari',strtolower($UA))
){
	$is_macSafari=true;
}
if(
	ereg('mac',strtolower($UA))
	&&
	ereg('firefox',strtolower($UA))
){
	$is_macFirefox=true;
}
*/
$br='';
if($is_mac){
	$br='<br />';
}
#$is_mac=true;

#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#

$limit=100;

$WHERE=" WHERE shop_id ='".$shop_id."'";
//list($WSe,$WSl,$WSt)=select_seek ($CON,'slideShow','','',$limit,$WHERE,'');

?><html lang="ja">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<TITLE>photo admin</TITLE>

<meta http-equiv="content-style-type" content="text/css">

<?

$UA = getenv("HTTP_USER_AGENT");
$RF = getenv("HTTP_REFERER");

$RA = getenv("REMOTE_ADDR");
$RH = gethostbyaddr($RA);
?>


<LINK REL="stylesheet" TYPE="text/Css" HREF="./css/style.css">
<style type="text/css">
<!--

td{ vertical-align: top;}
a{}
a{font-size:12px;color:#000000;text-decoration: underline;font-weight:300;letter-spacing:1pt;}
a:hover{font-size:12px;color:#FF8500;text-decoration:underline;font-weight:300;letter-spacing:1pt;}
.pageTitle{font-size:12px;color:#200D07;}
#headerComment{font-size:10px;color:#ffffff;}
.lc{color:#fff;}
.al{font-size:14px;color:#ffffff;text-decoration: none;letter-spacing:1pt;text-transform: capitalize;line-height:18px;font-family:'HGｺﾞｼｯｸM','HGｺﾞｼｯｸE';}
.al:hover{font-size:14px;color:#FF8500;text-decoration:none;letter-spacing:1pt;text-transform: capitalize;line-height:18px;font-family:'HGｺﾞｼｯｸM','HGｺﾞｼｯｸE';}


.content_h{font-size:18px;color:#271208;font-weight:bold;font-family:'HGｺﾞｼｯｸM','HGｺﾞｼｯｸE';}

.nt{font-size:12px;font-weight:bold;color:#FF8500;letter-spacing:1px;}
.login{font-size:12px;color:#ffffff;padding-left: 7px;}
.alt{color:#ff0000;}
.fsnl{
	WIDTH: 90px;
	ime-mode:disabled;
	HEIGHT: 12px;
	font-size:10;
	border-color:#cccccc;
	border-width: 1px;
	border-style: solid;
}
.btn{
	WIDTH: 70px;
	HEIGHT: 13px;
	font-size:10;
	color:#ffffff;
	border-width: 0px;
	background:#000000;
}
.btnB{
	WIDTH: 70px;
	HEIGHT: 20px;
	font-size:10;
	color:#ffffff;
	border-width: 0px;
	background:#000000;
}
.fsn{
	WIDTH: 50px;
	HEIGHT: 18;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;

	ime-mode:disabled;
	background:#ffffff;

	color:#000000;
}
.fm{
	WIDTH: 150;
	HEIGHT: 18;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;
	background:#ffffff;
	color:#000000;
}
.fmn{
	WIDTH: 150;
	HEIGHT: 18;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;
	ime-mode:disabled;
	background:#ffffff;
	color:#000000;
}
.fl{
	WIDTH: 300;
	HEIGHT: 18;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;
	background:#ffffff;
	color:#000000;
}
.fln{
	WIDTH: 300;
	HEIGHT: 18;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;
	ime-mode:disabled;
	background:#ffffff;
	color:#000000;
}
.ta{
	WIDTH: 300;
	HEIGHT: 100;
	font-size:10;
	border-color:#555555;
	border-width: 1px;
	border-style: solid;
	background:#ffffff;
	scrollbar-base-color :#F2EEEC;
	scrollbar-arrow-color :#F2EEEC; 
	scrollbar-face-color :#ffffff; 
	scrollbar-track-color:#F2EEEC;
	scrollbar-3dlight-color:#F2EEEC;
	scrollbar-highlight-color :#ffffff; 
	scrollbar-shadow-color :#ffffff;
	scrollbar-darkshadow-color :#F2EEEC; 
	color:#000000;
}
.tdc{
background:#ffffff;
padding:10px 10px 10px 10px;
line-height:18px;
}
.tdl{
background:#aaffaa;
padding:0;
}
.tdt{
background:#ddffdd;
padding:10px 10px 10px 10px;
font-weight:bold;
text-align:center
}

-->
</style>

</head>



<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<?
################################################################################
?>




<?
/*
if($staff_id!=1){
echo "調整中です。画像などは管理人にメール添付にてお気軽にお送りください。";
exit;
}
*/
################################################################################

?>
<div align=center>
【<b>
<?=html_entity_decode($SFl[0][business_name_main_j]);?>
<?=html_entity_decode($SFl[0][business_name_sub_j]);?>
</b>】</div>
<table border=0 cellpadding=0 cellspacing=0 style="line-height:1px;">

<tr>


<td valign=middle bgcolor=#ffffff style="line-height:14px;">

<?

if($WSt>0){
	for($r=0;$r<$WSt;$r++){
	
		$SN	 = '../_imgDS/'.$shop_id.'_'.$WSl[$r][photo_id].'_'.$WSl[$r][image_time].'l.jpg';	


		$nowPrinting= './images/c/nowPrintingA.gif';
		$is_img=false;
		if(file_exists($SN)){
			$is_img=true;
			list($width, $height, $type, $attr) = @getimagesize($SN);
		}else{
			list($width, $height, $type, $attr) = @getimagesize($nowPrinting);
			$SN	 = $nowPrinting;
			$number="&nbsp;";
		}
		if($width>0){

?>
<a href="<?=$_SERVER['PHP_SELF']?>?shop_id=<?=$RV[shop_id]?>&photo_id=<?=$WSl[$r][photo_id]?>" title="<?=html_entity_decode($WSl[$r][title], ENT_QUOTES)?>"><img src='<?=$SN?>' <?=$attr?> border=0 alt="<?=html_entity_decode($WSl[$r][title], ENT_QUOTES)?>"></a>
<?
			if($r==7){
				echo "<br />";
			}
		}
	}
}


if($WSt<$limit){
	echo "<br /><br />[<a href='".$_SERVER['PHP_SELF']."?shop_id=".$RV[shop_id]."'>写真追加</a>]<br /><br />";
}
?>



<table border=0 cellpading=0 cellspacing=0 width=100% class=tdc>

<form name="f" method="post" action="<?=$_SERVER['PHP_SELF']?>" ENCTYPE="multipart/form-data">

<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<?
if($_POST[mode]=='' || $_POST[mode]=='c' ){
?>

<tr>
<td width=145 class="tdt">写真
</td><td class="tdc"><span class=alt>*</span> 恐れ入りますが、アップロードする写真画像の幅を600ピクセルにしてください。<br />
<?
				if(file_exists($IPFList)){
					list($width, $height, $type, $attr) = @getimagesize($IPFList);
?>
<img src='<?=$IPFList?>' <?=$attr?>>
<?
				}
?>
<?
				if(file_exists($IPF300)){
					list($width, $height, $type, $attr) = @getimagesize($IPF300);
?>
<img src='<?=$IPF300?>' <?=$attr?>>
<?
				}
?>
<?
				if(file_exists($IPFBIG)){
					list($width, $height, $type, $attr) = @getimagesize($IPFBIG);
?>
<img src='<?=$IPFBIG?>' <?=$attr?>>
<?
				}
?>


<input type="file" name="upfile" class=fl <?=$onFB?>><br />（<span class=alt>※</span>JPG、GIF、PNG画像のみ、<?=$max_filesize?>bytes以下）</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>



<tr>
<td width=145 class="tdt">
写真のジャンル</td><td class="tdc">

<?

$valAr=explode('_',$photoGenreAr[0]);
$currName0=$valAr[($lang-1)];

for($r=1;$r<count($photoGenreAr);$r++){
	$valAr=explode('_',$photoGenreAr[$r]);
	$currName=$valAr[($lang-1)];
?>
<nobr>
<input type=radio name="photoGenre" value="<?=$r?>"<?if($RV[photoGenre]!='' && $RV[photoGenre]==$r){echo " checked";}?> /><?=$currName?>&nbsp;</nobr>



<?}?>
<nobr>
<input type=radio name="photoGenre" value="0"<?if($RV[photoGenre]!='' && $RV[photoGenre]==0){echo " checked";}?> /><?=$currName0?>&nbsp;</nobr>

</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>




<tr>
<td width=145 class="tdt">
サービスタイム</td><td class="tdc">

<?
	$valAr=explode('_',$timeOfMenuAr[0]);
	$currName0=$valAr[($lang-1)];
	for($r=0;$r<count($timeOfMenuAr);$r++){
		if($timeOfMenuAr[$r]!=''){
			$valAr=explode('_',$timeOfMenuAr[$r]);
			$currName=$valAr[($lang-1)];
	?>
<nobr>
<input type=radio name="timeOfMenu" value="<?=$r?>"<?if($RV[timeOfMenu]!='' && $RV[timeOfMenu]==$r){echo " checked";}?> /><?=$currName?>&nbsp;</nobr>



<?
		}
	}
?>

</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>



<tr>
<td width=145 class="tdt">
料理名<br />（写真タイトル）</td>

<td class="tdc">

<input type="text" name="title_j" value="<?=$RV['title_j']?>" class="fm">（日本語）　
<input type="text" name="title_e" value="<?=$RV['title_e']?>" class="fm">（英語）

<br />
<input type=checkbox name="is_main" value="1"<?if($RV[is_main]==1){echo " checked";}?> />

この画像をメイン画像にする&nbsp;&nbsp;<span style="color:red">（←ここにチェックを入れると、TOPページに表示されたり、検索結果で表示される画像を指定する事が出来ます。）</span> 

</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>


<tr>
<td width=145 class="tdt">
料理ジャンル</td>

<td class="tdc">
<?
for($r=0;$r<$TSt;$r++){

	$is_checked='';

	if(strlen($RV[type_ids])>0){

		$type_idsAr=explode(',',$RV[type_ids]);
		for($t=0;$t<count($type_idsAr);$t++){
			if($RV["type_id".$r]==$TSl[$r][type_id]){
				$is_checked=' checked';
			}

			if($type_idsAr[$t]==$TSl[$r][type_id]){
				$is_checked=' checked';
			}
		}
	}
?><nobr>
<input type=checkbox name="type_id<?=$r?>" value="<?=$TSl[$r][type_id]?>" <?=$is_checked?>><?=$TSl[$r]["type_name".$LT]?></nobr>

<?
}
?>
<br /><br />
その他の場合以下をご入力下さい。<br />

日本語：<input type="text" name="menuGenreTxt_j" value="<?=$RV['menuGenreTxt_j']?>" class="fm">　　
英語：<input type="text" name="menuGenreTxt_e" value="<?=$RV['menuGenreTxt_e']?>" class="fm">
<?/*?>
<br /><br />
<input type=checkbox name="is_rowfood" value="1"<?if($RV[is_rowfood]==1){echo " checked";}?> />このメニューはローフード（低加熱調理）である。
<?*/?>
</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>





<tr>
<td width=145 class="tdt">
含まれる動物性</td>
<td class="tdc">
微量でも、素材、料理油、調味料など料理に含まれる動物性をご選択・ご入力下さい。<br />
<?

$valAr=explode('_',$vegeTypeAr[0]);
$currName0=$valAr[($lang-1)];
if(strlen($RV[vegeLevel])>0){
	$voteAr=explode(',',$RV[vegeLevel]);
}
for($r=1;$r<count($vegeTypeAr);$r++){
	$valAr=explode('_',$vegeTypeAr[$r]);
	$currName=$valAr[($lang-1)];

	$is_checked='';
	if(strlen($RV[vegeLevel])>0){

		$type_idsAr=explode(',',$RV[type_ids]);
		for($t=0;$t<count($voteAr);$t++){

			if($RV["vegeType".$r]==$r){
				$is_checked=' checked';
			}

			if($voteAr[$t]==$r){
				$is_checked=' checked';
			}
		}

	}


?>
<nobr>
<input type=checkbox name="vegeType<?=$r?>" value="<?=$r?>"<?=$is_checked?> onClick="c(0,<?=$r?>)" /><a href="javascript:;" onClick="c(1,<?=$r?>);" class=c><?=$currName?></a>&nbsp;</nobr>

<?}?>

<br />
<nobr>
<input type=checkbox name="vegeType0" value="1"<?if($RV["vegeType0"]==1){echo " checked";}?> onClick="c(0,0)" /><a href="javascript:c(1,0);" class=c><?=$currName0?></a>&nbsp;</nobr>

<style>
.c{color:#000000;text-decoration:none;font-size: 12px;}
.c:hover{color:#000000;text-decoration:none;font-size: 12px;}
</style>
<script language=javascript>
function c(m,p){
	if(m==0){
		if(p==1){
			for(r=2;r<<?=(count($vegeTypeAr)-0)?>;r++){
				TC=eval('document.f.vegeType'+r);
				TC.checked=false;
			}
			document.f.vegeType0.checked=false;
		}
		if(p>1 || p==0){
			document.f.vegeType1.checked=false;
		}
	}
	if(m==1){
		if(p==1){
				for(r=2;r<<?=(count($vegeTypeAr)-0)?>;r++){
					TC=eval('document.f.vegeType'+r);
					TC.checked=false;
				}
			if(document.f.vegeType1.checked==true){
			}
			document.f.vegeType0.checked=false;
		}
		if(p!=1){
				document.f.vegeType1.checked=false;			if(p==0){

			}
		}
		TC=eval('document.f.vegeType'+p);
		if(TC.checked==true){
			TC.checked=false;
		}else{
			TC.checked=true;
		}
	}
}
</script>
<br />
<span class=alt>※</span>その他に含まれる動物性、動物由来のものが有りましたらご入力下さい。<br />
日本語：<input type="text" name="vegeLevelTxt_j" value="<?=$RV['vegeLevelTxt_j']?>" class="fm"><br />
英語：<input type="text" name="vegeLevelTxt_e" value="<?=$RV['vegeLevelTxt_e']?>" class="fm">
</td></tr>

<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>



<tr>
<td width=145 class="tdt">
コメント<br />
(<?=$limitComment?>文字まで)</td><td class="tdc">
<textarea name=note_j class=ta cols=50 rows=5 <?=$onFB?>><?=$RV[note_j]?></textarea>（日本語）<br />
<textarea name=note_e class=ta cols=50 rows=5 <?=$onFB?>><?=$RV[note_e]?></textarea>（英語）


</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<tr>
<td width=145 class="tdt">
お値段</td><td class="tdc">
<input type="text" name="price" value="<?=$RV['price']?>" class="fsn"> 円</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<tr>
<td width=145 class="tdt">
この情報の日付</td><td class="tdc">

<select name="y"><option value="">
<?
if($RV[y]=='')$RV[y]=date('Y',time());
for($r=2007;$r<(1+date('Y',time()));$r++){
?>
<option value="<?=$r?>"<?if($r==$RV[y]){echo " selected";}?>><?=$r?>

<?}?>
</select>年 <select name="m"><option value="">
<?
if($RV[m]=='')$RV[m]=date('n',time());
for($r=1;$r<(12+1);$r++){
	$qr=$r;
#	if($r<10){$qr='0'.$r;}
?>
<option value="<?=$qr?>"<?if($qr==$RV[m]){echo " selected";}?>><?=$r?>

<?}?>
</select>月 <select name="d"><option value="">
<?
if($RV[d]=='')$RV[d]=date('j',time());
for($r=1;$r<32;$r++){
	$qr=$r;
#	if($r<10){$qr='0'.$r;}
?>
<option value="<?=$qr?>"<?if($qr==$RV[d]){echo " selected";}?>><?=$r?>

<?}?>
</select>日




</td></tr>
<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<?if($status_id<3){?>

<tr>
<td width=145 class="tdt">
写真撮影(提供)者</td><td class="tdc">

<select name=cameraman_id>
<option value="">写真提供者表示なし
<?

if($ISt>0){
	for($r=0;$r<$ISt;$r++){
		$name			=html_entity_decode($ISl[$r][name], ENT_QUOTES);
		$handle_j	=html_entity_decode($ISl[$r][handle_j], ENT_QUOTES);
		$handle_e	=html_entity_decode($ISl[$r][handle_e], ENT_QUOTES);

		$handle_view=$handle_j;

		$std='';
		if($ISl[$r][mem_id]==$staff_id){
			$std=' selected';
		}
	
		if($status_id==1){
			if($RV[cameraman_id]==$ISl[$r][mem_id]){
				$std=' selected';
			}
?>
<option value="<?=$ISl[$r][mem_id]?>"<?=$std?>><?=$handle_view?>

<?
		}
		if($status_id==2){
			if($staff_id==$ISl[$r][mem_id]){

?>
<option value="<?=$ISl[$r][mem_id]?>"<?=$std?>><?=$handle_view?>

<?
			}
		}
		if($status_id==3){
			if($CBl[0][mem_id]==$staff_id){
?>
<option value="<?=$ISl[$r][mem_id]?>"<?=$std?>><?=$handle_view?>

<?
			}
		}
		if($ISl[$r][mem_id]==100 || $ISl[$r][mem_id]==1000){
?>
<option value="<?=$ISl[$r][mem_id]?>"<?=$std?>><?=$handle_view?>

<?
		}
	}
}
?>

</select>

著作権上問題の無い写真をご使用下さい！






</td></tr>
<?}?>

<?if($status_id==3){?>
<input type="text" name="cameraman_id" value="<?=$RV[cameraman_id]?>">

<?}?>
<?if($RV[photo_id]>0){?>
<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<tr>
<td width=145 class="tdt">
削除</td><td class="tdc">
<input type="checkbox" name="is_del" value="1">削除する
</td></tr>

<?}?>

<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>

<tr><td colspan=2 align=center>
<br />

<input type="hidden" name="shop_id" value="<?=$RV[shop_id]?>">
<input type="hidden" name="image_time" value="<?=$RV[image_time]?>">
<input type="hidden" name="image_time_old" value="<?=$RV[image_time_old]?>">

<input type="hidden" name="photo_id" value="<?=$RV[photo_id]?>">
<input type="hidden" name="mode" value="f">
<input type="submit" value="確認画面へ" class="btnB">
<input type="hidden" name="is_upfile" value="<?=$RV[is_upfile]?>">

</td></tr>


<?}?>


<?if( $_POST[mode]=='f'){####################################################################################

	$ac=0;

?>


<tr>
<td width=145 class="tdt">写真
</td><td class="tdc">

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

</td></tr>


<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>






<tr><td colspan=2 class="tdl" height=1><img src="/images/c/clear.gif" height=1  /></td></tr>



<?php }?>