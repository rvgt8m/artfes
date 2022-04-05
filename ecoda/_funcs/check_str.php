<?
function check_str($check_str,$mode,$maxlen,$minlen,$hidden_tag){
	// 設定ファイル（conf.h）中、この関数で使うエラーコメント他変数を読み込む
/*	global $alert_only_num,$alert_only_alfa,$alert_only_singlebyte,$alert_is_email,$alert_over_length,$alert_ng_word,$alert_default,$alert_null,$font_alert_start,$font_alert_end;
*/

############################################################ 
#                  設定ファイル 
#
#
############################################################ 
#####以下、案件に合わせ修正して使用ください。
$top_dir="ドメイン";

############################################################ 
#####パスワード生成方面（ってどこ？）
$pwelemstr = "abcdefghkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ2345679";
$pwd_len=8;
############################################################ 
##### 文字列チェック
### 予めＮＧとなる文字列が定められている場合、
###その他（文字数や半角英数指定）がエラーでなくとも蹴るために使用
# SerialNoでのＮＧ文字列指定
$ng_word_1="00000000,99999999";
$ng_word_2="";
$ng_word_3="";

##### 文字列チェックでのエラーコメントを指定
## check_string() 使用時
# 半角数字のみを指定した場合、そうでなかった時だけ出す
$alert_only_num="半角数字のみ入力してください。";

# 半角英字のみを指定した場合、そうでなかった時だけ出す
$alert_only_alfa="半角英字のみ入力してください。";

# 半角数字のみを指定した場合、そうでなかった時だけ出す
$alert_only_singlebyte="全角文字を使用しないで下さい。";

# 半角数字のみを指定した場合、そうでなかった時だけ出す
$alert_is_email="Eメールアドレスとして有効で有りません";

# 半角数字のみを指定した場合、そうでなかった時だけ出す
$alert_over_length="入力文字数をお確かめ下さい。";
$alert_over_length="入力文字数超過しています。";
$alert_small_length="入力文字数不足しています。";

# 半角数字のみを指定した場合、そうでなかった時だけ出す
$alert_ng_word="入力内容をお確かめ下さい。";
# 電話番号（ハイフンあり）
$alert_tel=' 恐れ入りますが、03-1234-5678 の形式でお願いします。';
# 未入力
$alert_null="未入力です。";
# その他
$alert_default="入力内容は有効ではありません。";
# URL
$alert_url="URLスとして有効で有りません。";
$alert_latlom="座標値として適切でありません。";


#  文字列チェックエラーコメント表示フォントを指定
$font_alert_start='<font color="#ff0000">';
$font_alert_end="</font>";

	$alert_text="";

	if(preg_match("/^[0-9]+$/", $mode)) { // 必須入力項目の場合
		if(strlen($check_str)>10000){
			exit;
		}
		$check_str = str_replace('\'', '&#39;', $check_str);
		$check_str = str_replace('"', '&quot;', $check_str);
		$check_str = str_replace('>', '&bt;', $check_str);
		$check_str = str_replace('<', '&lt;', $check_str);
		$check_str = str_replace('‘', '&lsquo;', $check_str);
		$check_str = str_replace('’', '&rsquo;', $check_str);
		$check_str = str_replace('“', '&ldquo;', $check_str);
		$check_str = str_replace('”', '&rdquo;', $check_str);

		if($check_str=="") { // 未入力の場合
			$alert_text=$alert_null;
		}else{
			if($ng_word){
				$ng_word_arr = explode(",", $ng_word);
				for($r=0;$r<count($ng_word_arr);$r++){
					if($ng_word_arr[$r]=="$check_str"){
						$alert_text.=$alert_ng_word;
						return $check_str."<font color=red> ".$alert_text."</font>";
					}
				}
			}
			else if($alert_text==""){
				switch ($mode) {
					case 1:   		   // 1：半角数値だけかどうか
						if(!preg_match("/^[0-9]+$/", trim($check_str))) {
							$alert_text=$alert_only_num;
						}
						break;
					case 2:    		  // 2：半角英字だけかどうか
						if(!preg_match("/^[a-zA-Z]+$/",trim($check_str))) {
							$alert_text=$alert_only_alfa;
						}
						break;
					case 3:     		 // 3：半角英数だけかどうか
						if(!preg_match("/^[a-zA-Z0-9]+$/",trim($check_str))) {
							$alert_text=$alert_only_singlebyte;
						}
						break;
					case 4:     		 // 4：E-mailかどうか
						if (!preg_match("/[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+@[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+/" ,trim($check_str))){
								$alert_text=$alert_is_email;
						}
						break;
					case 5:     		 // 5：ハイフンあり電話番号かどうか
						if(!preg_match("/^[0-9]{2,}\-[0-9]{2,}\-{0,1}[0-9]{2,}$/",trim($check_str))){
							$alert_text=$alert_tel;
						}
						break;
					case 6:     		 // 6：ハイフンあり郵便番号かどうか
						if(!preg_match ("/^d{3}-d{4}$/",trim($check_str))) {
							$alert_text=$alert_default;
						}
						break;
					case 7:     		 // 7：http://ありURLかどうか
						if(!preg_match ('/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/',trim($check_str))) {
							$alert_text=$alert_url;
						}
						break;
					case 7:     		 // 7：http://ありURLかどうか
						if(!is_double (trim($check_str))) {
							$alert_text=$alert_latlom;
						}
						break;
 


					default:
						$alert_text="";
						break;
				}
				if($maxlen){
					if($maxlen<strlen ($check_str)){
						$alert_text.=$alert_over_length;
					}
				}
				if($minlen){
					if($minlen>strlen ($check_str)){
						$alert_text.=$alert_small_length;
					}
				}
			}
		}
	}
	if($hidden_tag!=""){
		$hidden_tag="<input type=hidden name='".$hidden_tag."' value='".$check_str."'>";
	}
	if($alert_text!=""){
		$alert_text="".$font_alert_start.$alert_text.$font_alert_end;
	}
/*
echo "<br>check_str=".$check_str;
echo "<br>alert_text=".$alert_text;
echo "<br>hidden_tag=".$hidden_tag;
*/
	if($mode==9 && $alert_text==''){
		$check_str.=' 様';
	}
	$resSet=array($check_str,$alert_text,$hidden_tag);
	return $resSet;
}
?>