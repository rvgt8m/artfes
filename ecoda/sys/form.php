<?php
$tblTarget = ($_GET['m'] !='')? $_GET['m']:'artwork';

if(isset($_SESSION['title']) && $_SESSION['title'] != ''){
    $session_key ='supporter_id'.$supporter_id.'_tbltarTet'.$tbltarTet.'_line_id'.$_SESSION['line_id'];
    $session_data = (isset($_SESSION[$session_key]))?$_SESSION[$session_key]:[];
}else{
    $session_data = [];
}

$session_data['line_id'] = ($_GET['i'] !='')? $_GET['i']:'';
echo
$session_data['tblTarget'] = $tblTarget;

$max_filesize = 2222222;

?>55555555555555
<form action="confilm.php" method="post" ENCTYPE="multipart/form-data">

    <input type="text" name="prent_content_id" value="<?php echo $session_data['prent_content_id'];?>" />
    <input type="text" name="sort_id" value="<?php echo $session_data['sort_id'];?>" />
    <input type="text" name="category_main_detail_id" value="<?php echo $session_data['category_main_detail_id'];?>" />
    <input type="text" name="category_sub_detail_id" value="<?php echo $session_data['category_sub_detail_id'];?>" />
    <input type="file" name="upfile" class=fl ><br />（<span class=alt>※</span>JPG、GIF、PNG画像のみ、<?=$max_filesize?>bytes以下）</td></tr>

    <input type="checkbox" name="is_disable" value="<?php echo $session_data['is_disable'];?>" />
    <input type="text" name="title" value="<?php echo $session_data['title'];?>" />
    <input type="text" name="catchecopy" value="<?php echo $session_data['catchecopy'];?>" />
    <hr />
    <textarea name="content" cols=100 rows=5><?php echo $session_data['content'];?></textarea>
    <hr />
    <input type="text" name="url" value="<?php echo $session_data['url'];?>" />
    <input type="checkbox" name="is_contact" value="<?php echo $session_data['is_contact'];?>" />
    <input type="hidden1" name="image_name" value="<?php echo $session_data['image_name'];?>" />
    <input type="text" name="start_date_time" value="<?php echo $session_data['start_date_time'];?>" />
    <input type="text" name="end_date_time" value="<?php echo $session_data['end_date_time'];?>" />
    <input type="text" name="background_color" value="<?php echo $session_data['background_color'];?>" />
    <input type="text" name="background_image_id" value="<?php echo $session_data['background_image_id'];?>" />
    <input type="submit" name="btn_f" value="入力内容で表示を確認" />
    
<input type="hidden1" name="mode" value="f">
    <input type="hidden1" name="line_id" value="<?php echo $session_data[line_id];?>" />
    <input type="hidden1" name="tblTarget" value="<?php echo $session_data['tblTarget'];?>" />
</form>
