<style>
.btn1 a:hover{   filter: alpha(opacity=100);  -moz-opacity1;  opacity:1; }
.btn2 a:hover{   filter: alpha(opacity=100);  -moz-opacity1;  opacity:1; }
<?
$cssAlpha="  filter: alpha(opacity=70);  -moz-opacity:0.70;  opacity:0.70; ";
$cssAlpha100="  filter: alpha(opacity=100);  -moz-opacity1;  opacity:1; ";
$themeColor = "#cc3350";
$dd = "fgh";
?>
<?= $themeColor?>
.btn1 a{display:block;width:32px;height:32px;text-indent:-9999px;background:url(/images/flags/Japan.png) no-repeat;<?=($lang==1)?$cssAlpha100:$cssAlpha?>}
.btn2 a{display:block;width:32px;height:32px;text-indent:-9999px;background:url(/images/flags/United-Kingdom.png) no-repeat;<?=($lang==6)?$cssAlpha100:$cssAlpha?>}
.sitetitlec{
	margin-left:20px;
}
.sitetitles { 
// 	font-family: 'Tangerine', serif;
 	font-family: 'Pinyon Script', cursive;
 	color:#bbbbbb;
	font-weight:bold;
 	font-size: 77px;
	text-shadow:
	2px 8px 6px rgba(0,0,0,0.18),
	0px -5px 35px rgba(255,255,255,0.5);
}.sitetitlesArea { 
	color:<?=$themeColor?>;
}
.sitetitles2{
	color:#555;
}
.International {
	color:#777; 
	z-index:21;
	font-family: 'times';  
	font-style :italic;
	position:absolute; top:0px; left:220px;

	font-size: 30px;

	line-height:45px;
	text-shadow:
	0 0 25px #edf8ff,
	0 0 20px #edf8ff,
	0 0 0.40px #edf8ff;
}

.purpose{
	margin-left:35px;
}

/* Focus state outline
-----------------------------------------------------------------------------------------------------------*/

.ui-bar-g {
	border: 1px solid 		<?=$themeColor?>;
	background: 			#A7FEA7;
	color: 					#000;
	text-shadow: 0 1px 0 	#333;

	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		#ff0));
  	-ms-gilter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-bar-g,
.ui-bar-g input,
.ui-bar-g select,
.ui-bar-g textarea,
.ui-bar-d button {
	font-gamily: Helvetica, Arial, sans-serif;
}
.ui-bar-g .ui-link-inherit {
	color: 					#333;
}
.ui-bar-g .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-body-g {
	border: 1px solid 		<?=$themeColor?>;
	color: 					#333333;
	text-shadow: 0 1px 0 	#fff;






}
.ui-body-g,
.ui-body-g input,
.ui-body-g select,
.ui-body-g textarea,
.ui-body-g button {
	font-gamily: Helvetica, Arial, sans-serif;
}
.ui-body-g .ui-link-inherit {
	color: 					#333333;
}
.ui-body-g .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-btn-up-g {
	border: 1px solid 		#eee;
	background: 			#47332C; 
	font-weight: bold;
	color: 					#000;
	text-decoration:		none;
	text-shadow: 0 1px 0 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#fff, 
							#eee);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		#ddd));
	-ms-gilter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-btn-up-g a.ui-link-inherit {
	color: 					#F00;
}
.ui-btn-hover-g {
	border: 1px solid 		#ddd;
/*	background: 			#fbe26f;*/
	font-weight: bold;
	color: 					#111;
	text-decoration:		none;
	text-shadow: 0 1px 1px 	#fff;

	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fcf0b5),
		color-stop(1, 		#fbe26f));
  	-ms-gilter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#fcf0b5', EndColorStr='#fbe26f')";

}

.ui-btn-hover-g a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-down-g {
	border: 1px solid 		#9C7162;
	background: 			#855f52;
	font-weight: bold;
	color: 					#f00;
	text-shadow: 0 1px 1px 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#ff3),
		color-stop(1, 		<?=$themeColor?>));
	-ms-gilter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#47332C', EndColorStr='#855f52')";
}
.ui-btn-down-g a.ui-link-inherit {
	color: 					#333;
}
/* Focus state outline
-----------------------------------------------------------------------------------------------------------*/

.ui-bar-f {
	border: 1px solid 		#eee;
	background: 			#A7FEA7;
	color: 					#fff;
	text-shadow: 0 1px 0 	#333;

	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		<?=$themeColor?>));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-bar-f,
.ui-bar-f input,
.ui-bar-f select,
.ui-bar-f textarea,
.ui-bar-d button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-bar-f .ui-link-inherit {
	color: 					#333;
}
.ui-bar-f .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-body-f {
	border: 1px solid 		<?=$themeColor?>;
	color: 					#333333;
	text-shadow: 0 1px 0 	#fff;
}
.ui-body-f,
.ui-body-f input,
.ui-body-f select,
.ui-body-f textarea,
.ui-body-f button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-body-f .ui-link-inherit {
	color: 					#333333;
}
.ui-body-f .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-btn-up-f {
	border: 1px solid 		#eee;
	background: 			#47332C; 
	font-weight: bold;
	color: 					#000;
	text-decoration:		none;
	text-shadow: 0 1px 0 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		<?=$themeColor?>));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-btn-up-f a.ui-link-inherit {
	color: 					#F00;
}
.ui-btn-hover-f {
	border: 1px solid 		#eee;
/*	background: 			#fbe26f;*/
	font-weight: bold;
	color: 					#111;
	text-decoration:		none;
	text-shadow: 0 1px 1px 	#fff;

	background-image: -moz-linear-gradient(top, 
							#fcf0b5, 
							#fbe26f);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fcf0b5),
		color-stop(1, 		#fbe26f));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#fcf0b5', EndColorStr='#fbe26f')";

}

.ui-btn-hover-f a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-down-f {
	border: 1px solid 		#9C7162;
	background: 			#855f52;
	font-weight: bold;
	color: 					#f00;
	text-shadow: 0 1px 1px 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		<?=$themeColor?>));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#47332C', EndColorStr='#855f52')";
}
.ui-btn-down-f a.ui-link-inherit {
	color: 					#333;
}


/* Focus state outline
-----------------------------------------------------------------------------------------------------------*/

.ui-bar-g {
	border: 1px solid 		#eee;
	background: 			#A7FEA7;
	color: 					#fff;
	text-shadow: 0 1px 0 	#333;

	background-image: -moz-linear-gradient(top, 
							<?=$themeColor?>, 
							#fff);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		<?=$themeColor?>),
		color-stop(1, 		#fff));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-bar-h,
.ui-bar-h input,
.ui-bar-h select,
.ui-bar-h textarea,
.ui-bar-d button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-bar-h .ui-link-inherit {
	color: 					#333;
}
.ui-bar-h .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-body-h {
	border: 1px solid 		<?=$themeColor?>;
	color: 					#333333;
	text-shadow: 0 1px 0 	#fff;
}
.ui-body-h,
.ui-body-h input,
.ui-body-h select,
.ui-body-h textarea,
.ui-body-h button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-body-h .ui-link-inherit {
	color: 					#333333;
}
.ui-body-h .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-btn-up-h {
	border: 1px solid 		#eee;
	background: 			#47332C; 
	font-weight: bold;
	color: 					#000;
	text-decoration:		none;
	text-shadow: 0 1px 0 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#fff, 
							<?=$themeColor?>);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fff),
		color-stop(1, 		<?=$themeColor?>));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-btn-up-f a.ui-link-inherit {
	color: 					#F00;
}
.ui-btn-hover-h {
	border: 1px solid 		#eee;
/*	background: 			#fbe26f;*/
	font-weight: bold;
	color: 					#111;
	text-decoration:		none;
	text-shadow: 0 1px 1px 	#fff;

	background-image: -moz-linear-gradient(top, 
							#fcf0b5, 
							#fbe26f);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fcf0b5),
		color-stop(1, 		#fbe26f));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#fcf0b5', EndColorStr='#fbe26f')";

}

.ui-btn-hover-f a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-down-h {
	border: 1px solid 		#9C7162;
	background: 			#855f52;
	font-weight: bold;
	color: 					#f00;
	text-shadow: 0 1px 1px 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							<?=$themeColor?>, 
							#fff);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		<?=$themeColor?>),
		color-stop(1, 		#fff));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#47332C', EndColorStr='#855f52')";
}
.ui-btn-down-h a.ui-link-inherit {
	color: 					#333;
}



.ui-bar-f {
	border: 1px solid 		#3BFD3C;
	background: 			#A7FEA7;
	color: 					#fff;
	text-shadow: 0 1px 0 	#333;

	background-image: -moz-linear-gradient(top, 
							#3CFE3B, 
							#009300);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#3CFE3B),
		color-stop(1, 		#009300));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-bar-f,
.ui-bar-f input,
.ui-bar-f select,
.ui-bar-f textarea,
.ui-bar-d button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-bar-f .ui-link-inherit {
	color: 					#333;
}
.ui-bar-f .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-body-f {
	border: 1px solid 		#AE9D7B;
	color: 					#333333;
	text-shadow: 0 1px 0 	#fff;


background: url(/images/sp/bg.gif);



}
.ui-body-f,
.ui-body-f input,
.ui-body-f select,
.ui-body-f textarea,
.ui-body-f button {
	font-family: Helvetica, Arial, sans-serif;
}
.ui-body-f .ui-link-inherit {
	color: 					#333333;
}
.ui-body-f .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-btn-up-f {
	border: 1px solid 		#9C7162;
	background: 			#47332C; 
	font-weight: bold;
	color: 					#FFF;
	text-shadow: 0 1px 0 	#333;
	background-image: -moz-linear-gradient(top, 
							#855f52, 
							#47332C);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#855f52),
		color-stop(1, 		#47332C));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-btn-up-f a.ui-link-inherit {
	color: 					#FFF;
}
.ui-btn-hover-f {
	border: 1px solid 		#e79952;
/*	background: 			#fbe26f;*/
	font-weight: bold;
	color: 					#111;
	text-shadow: 0 1px 1px 	#fff;

	background-image: -moz-linear-gradient(top, 
							#fcf0b5, 
							#fbe26f);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fcf0b5),
		color-stop(1, 		#fbe26f));
  	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#fcf0b5', EndColorStr='#fbe26f')";

}

.ui-btn-hover-f a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-down-f {
	border: 1px solid 		#9C7162;
	background: 			#855f52;
	font-weight: bold;
	color: 					#111;
	text-shadow: 0 1px 1px 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#47332C, 
							#855f52);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#47332C),
		color-stop(1, 		#855f52));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#47332C', EndColorStr='#855f52')";
}
.ui-btn-down-f a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-up-f,
.ui-btn-hover-f,
.ui-btn-down-f {
	font-family: Helvetica, Arial, sans-serif;
	text-decoration: none;
}


.ui-bar-m {
	border: 1px solid 		#3BFD3C;
	background: 			#A7FEA7;
	color: 					#fff;
	text-shadow: 0 1px 0 	#333;

	background-image: -moz-linear-gradient(top, 
							<?=themeColor?>, 
							#fff);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		<?=$themeColor?>),
		color-stop(1, 		#fff));
  	-ms-milter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-bar-m,
.ui-bar-m input,
.ui-bar-m select,
.ui-bar-m textarea,
.ui-bar-d button {
	font-mamily: Helvetica, Arial, sans-serif;
}
.ui-bar-m .ui-link-inherit {
	color: 					#333;
}
.ui-bar-m .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-body-m {
	border: 1px solid 		#AE9D7B;
	color: 					#333333;
	text-shadow: 0 1px 0 	#fff;


background: url(/images/sp/bg.gif);



}
.ui-body-m,
.ui-body-m input,
.ui-body-m select,
.ui-body-m textarea,
.ui-body-m button {
	font-mamily: Helvetica, Arial, sans-serif;
}
.ui-body-m .ui-link-inherit {
	color: 					#333333;
}
.ui-body-m .ui-link {
	color: 					#2489CE;
	font-weight: bold;
}
.ui-btn-up-m {
	border: 1px solid 		#9C7162;
	background: 			#47332C; 
	font-weight: bold;
	color: 					#FFF;
	text-shadow: 0 1px 0 	#333;
	background-image: -moz-linear-gradient(top, 
							<?=$themeColor?>, 
							#fff);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#855f52),
		color-stop(1, 		#47332C));
	-ms-milter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#855f52', EndColorStr='#47332C')";
}
.ui-btn-up-m a.ui-link-inherit {
	color: 					#FFF;
}
.ui-btn-hover-m {
	border: 1px solid 		#e79952;
/*	background: 			#fbe26f;*/
	font-weight: bold;
	color: 					#111;
	text-shadow: 0 1px 1px 	#fff;

	background-image: -moz-linear-gradient(top, 
							#fcf0b5, 
							#fbe26f);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#fcf0b5),
		color-stop(1, 		#fbe26f));
  	-ms-milter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#fcf0b5', EndColorStr='#fbe26f')";

}

.ui-btn-hover-m a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-down-m {
	border: 1px solid 		#9C7162;
	background: 			#855f52;
	font-weight: bold;
	color: 					#111;
	text-shadow: 0 1px 1px 	#ffffff;
	background-image: -moz-linear-gradient(top, 
							#47332C, 
							#855f52);
	background-image: -webkit-gradient(linear,left top,left bottom,
		color-stop(0, 		#47332C),
		color-stop(1, 		#855f52));
	-ms-milter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#47332C', EndColorStr='#855f52')";
}
.ui-btn-down-m a.ui-link-inherit {
	color: 					#333;
}
.ui-btn-up-m,
.ui-btn-hover-m,
.ui-btn-down-m {
	font-mamily: Helvetica, Arial, sans-serif;
	text-decoration: none;
}
.sample02 {
 float: right;

}

</style>
<script>
$.mobile.ajaxEnabled = false;
$(window).bind('resize load', function(){
//alert( 5);
  //     $("html").css("zoom" , $(window).width()/320 );
});
    $(document).on('click', 'a.anchor', function(e){
        e.preventDefault();
        var y = $($(this).attr('href')).offset().top;
        $.mobile.silentScroll(y);
    });

</script>

</head>
  
<body>
<div id="container">
	<header>
	<style>
	#nav {
		margin-left:100px;
  list-style: none;
  overflow: hidden;
}
 
#nav li {
//  width: 140px;
  text-align: left;
//  background-color: #333;
  float: left;
}
</style>