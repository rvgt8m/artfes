<?php
$DR = '/home/tes-sev/art-festival.net/public_html/ecoda/';

require_once $DR."_conf/define_ecoda.php";
require_once $DR."sys/Session.php";

require_once $DR."DAO/mst_categories.php";

$Session = new Session();
$supporterData = $Session->getSupporterDataFromSession();
/*
$MstCategories = new MstCategories();
$category = $MstCategories->getAll(ART_CATEGORIES);
//var_dump($category);
*/
function getViewName($supporterData = array()){
  $viewName = null;
  if($supporterData['handle_ja'] != ''){
    $viewName = $supporterData['handle_ja'];
  }
  if($supporterData['name_ja'] != ''){
    $viewName = $supporterData['name_ja'];
  }
  return $viewName;
}
var_dump($supporterData);
//echo $Session->ep($supporterData['handle_ja']);
//$Session->getViewName($supporterData);
//echo $supporterData['id'];
//echo "<pre>";var_dump($supporterData);echo "</pre>";
$lang = 1;
$langAryKey = $lang - 1;
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <title>category</title>
  <style>
    .ct{white-space: nowrap;}
    .ct3{word-break:nomal;;}
  </style>
</head>
<body>
<table>
  <tr valign=top>
    <td class="ct">
<?php foreach(ART_CATEGORIES as $cat_id => $data){?>
    <li>
    <a href="javascript:void(0);" onclick="sc(<?php echo $cat_id;?>)"><?php echo $data[$langAryKey]?></a>
  </li>
  <?php }?>
</td>
<td class="ct">
<span id="second_category"></span>

</td>
<td width="300">
<form action="category_confilm.php" method="post" id="">
<span id="third_category"></span>
  <span id="catgory_title" ></span>
  <input type="hidden1" name="root_category_id" id="root_category_id" value="5" />
  <!input type="hidden1" name="sub_root_category_id" id="category_id" value="" />
  <input type="submit" onclick="" value="確認画面へ" />
</form>

</td>
</tr>
</table>
<!--
  ID : <input type="text" id="id" value="1" />
  <button id="btn">SEND</button>
  <div><br></div>
  -->
  <script>
  function sc(c1){
    $("#root_category_id").val(c1);
    $.ajax({
        type: "POST",
        url: "/api/get_second_categories.php",
        data: { "c1" : c1 },
        dataType : "json"
      }).done(function(data){
        
        setData(data);
      }).fail(function(XMLHttpRequest, textStatus, error){
        alert(error);
      });
  }
  /*
  $(function(){
    id = 1;
    // ボタンがクリックされたら
    $("#btn").on("click", function(event){
      // 入力されたID値を取得
      id = $("#id").val();
      $.ajax({
        type: "POST",
        url: "/api/get_second_categories.php",
        data: { "c1" : id },
        dataType : "json"
      }).done(function(data){
        setData(data);
      }).fail(function(XMLHttpRequest, textStatus, error){
        alert(error);
      });
    });
  });
  */
//});
function setData(jsons){
  tags = '';
  $.each(jsons, function(index,json) {
    id = json.id;
    root_category_id = json.root_category_id;
    sub_root_category_id = json.sub_root_category_id;
    parent_category_id = json.parent_category_id;
    if (1 == <?php echo $lang?>){
      title = json.title_ja;
    }else{
      title = json.title_en;
    }
    tags += "<a href='javascript:void(0);' onclick='getThird("+sub_root_category_id+")'>"+title+"</a><br />";
    if(tags != null){
      $("#second_category").html(tags);
    }
  });
}

function getThird(c2){
  $.ajax({
    type: "POST",
    url: "/api/get_third_categories.php",
     data: { "c2" : c2 },
    dataType : "json"
  }).done(function(data){
//        $("#sub_root_category_id").val(c2);
    setDataThird(data);
  }).fail(function(XMLHttpRequest, textStatus, error){
      alert(error);
  });
}
function setDataThird(jsons){
  tags_third = '';
  $.each(jsons, function(index,json) {
    id = json.id;
    root_category_id = json.root_category_id;
    sub_root_category_id = json.sub_root_category_id;
    parent_category_id = json.parent_category_id;
    if (1 == <?php echo $lang?>){
      title = json.title_ja;
    }else{
      title = json.title_en;
    }
    tags_third += "<span class='ct3'><input type='checkbox' onclick='' name='sub_root_category_id[]' value='"+id+"' />"+title+"</span>&nbsp;";


    if(tags_third != null){
      $("#third_category").html(tags_third);
    }
  });
}
function setForm(sub_root_category_id,title){//alert(sub_root_category_id+"|"+title);
//  $("#category_id").val(sub_root_category_id);
  $("#catgory_title").text(title);
}
  </script>

</body>
</html>