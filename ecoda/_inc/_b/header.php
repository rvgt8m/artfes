<!DOCTYPE html>
<head>  
<meta charset="utf-8">
<?
if($_GET["lang"]==2){ $lang = 2;} else { $lang = 1;}
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';
?>
<title><?if($lang==1){echo 'えこだ芸術祭';}else{echo 'Ecoda Art Festival';}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">





<link rel="stylesheet"  href="//code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
<script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="//code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<!--[if IE]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	

 <!link rel="stylesheet"  href="c/s.css" />
<?php include($DR."_inc/css.php");?>
<style>
.entry{
	
text-align: left;
  float: left;
}
</style>
<div class="sample02">
<ul id="nav">
  <li><a href="<?=$_SERVER[PHP_SELF]?>?lang=1&t=<?=time()?>" title="Japanese"><img src="/images/flags/Japan.png" alt="Japanese"></a></li>
  <li><a href="<?=$_SERVER[PHP_SELF]?>?lang=2&t=<?=time()?>" title="English"><img src="/images/flags/United-Kingdom.png"  alt="English"></a></li>
</ul>
<div style="entry">
<a href="/purpose">芸術祭主旨</a>
<a href="/purpose/?p=allfree">無料参加</a>
<a href="/sys/_login">ログイン</a>
</div>

</div>
<?
$purpose = ($lang==1)? '江古田を芸術で賑わう街に！':'What can art do for lost heart by the money game?';
$subTitle = ($lang==1)? 'えこだ芸術祭&copy;':'Ecoda Art Festival&copy';
?>

<span class="International">International</span>
	<a href="/" style="text-decoration : none ;" >
		<span class="sitetitlec"><span class="sitetitles">
			<span class="sitetitlesArea"><span style="color:'#00ff00'">Eco</span>
			<span style="color:'#220022'">da</span> Art&nbsp;&nbsp;festival</span>
		</span>
	</a>
	<span class="sitetitles2">&nbsp;<? echo $subTitle.$purpose;?></span>
</span>
<span style="color:'#00ff00'">Eco</span>
<div data-role="main" class="ui-content"  data-theme="b">
	<div data-role="navbar">
				<ul>
					<li><a href="/?lang=<?=$lang?>" data-icon="home" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'/')>0){?>f<?}else{?>g<?}?>"><?=($lang==1)?'江古田 アートマップ':'Ecoda Art Map';?></a></li>
					<li><a href="/purpose/?lang=<?=$lang?>" data-icon="info" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'purporse')>0){?>f<?}else{?>g<?}?>"><?=($lang==1)?'芸術際主旨':'Purpose';?></a></li>
					<li><a href="/artist.php?lang=<?=$lang?>" data-icon="plus" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'artist')>0){?>f<?}else{?>g<?}?>"><?=($lang==1)?'アーティスト':'Artists';?></a></li>
					<li><a href="/shop.php?lang=<?=$lang?>" data-icon="grid" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'shop')>0){?>f<?}else{?>g<?}?>"><?=($lang==1)?'店舗参加':'Shops';?></a></li>
					<li><a href="/member.php?lang=<?=$lang?>" data-icon="search" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'member')>0){?>f<?}else{?>g<?}?>"><?=($lang==1)?'告知|発表会|募集':'News|Wanted';?></a></li>

				</ul>
		</div>
		
			<div data-role="navbar">
				<ul>

					<?if(strpos($_SERVER['REQUEST_URI'],'purpose')>0){?>
						<?=($lang==1)?'芸術際主旨':'Purpose';?>
					<?}?>

					<?if(strpos($_SERVER['REQUEST_URI'],'artist')>0){?>
						<li><a href="/artist.php?lang=<?=$lang?>" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'list')>0){?>g<?}else{?>g<?}?>">
						<?=($lang==1)?'参加アーティスト':'Artists';?></a></li>
						<li><a href="/artist.php?lang=<?=$lang?>" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'entry')>0){?>f<?}else{?>h<?}?>">
						<?=($lang==1)?'アーティスト登録':'Artists';?></a></li>
						<li><a href="/artist.php?lang=<?=$lang?>" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'circle')>0){?>f<?}else{?>b<?}?>">
						<?=($lang==1)?'本番度胸付けよう！会':'Artists';?></a></li>
					<?}?>

					<?if(strpos($_SERVER['REQUEST_URI'],'member')>0){?>
						<?=($lang==1)?'メンバー募集':'Wanted';?>
					<?}?>

					<?if(strpos($_SERVER['REQUEST_URI'],'shop')>0){?>
						<li><a href="/artist.php?lang=<?=$lang?>" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'list')>0){?>a<?}else{?>b<?}?>">
						<?=($lang==1)?'参加店舗':'entry';?></a></li>
						<li><a href="/artist.php?lang=<?=$lang?>" data-theme="<?if(strpos($_SERVER['REQUEST_URI'],'cm')>0){?>f<?}else{?>m<?}?>">
						<?=($lang==1)?'お店を宣伝！':'Advatise';?></a></li>
					<?}?>

					<?if(strpos($_SERVER['REQUEST_URI'],'entry')>0){?>
						<?=($lang==1)?'店舗参加':'shop entry';?>
					<?}?>

				</ul>
		</div>

    </header>
	<body>
	<div id="content" style="margin:0px 0px 0px 0px">
