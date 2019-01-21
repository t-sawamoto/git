<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>たかしくんゲーム</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/clearfix.css" rel="stylesheet" type="text/css" />
<link href="css/weight.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/quietflow.min.js"></script>
</head>

<body>
<!--背景の白枠-->
<div class="white-box">
  <div id="wrapper">
    <div id="container">
      <div class="form_1">
        <?php
	//ボタンの中身のバリューをランダムにさせる
		$random = array(0,1,2);
		shuffle($random);
	?>
        <form action = "" method ="POST" >
          <input type="hidden" name="num" value="<?php echo $random[0]; ?>" />
          <input type="image" src="images/cooking_chef_woman_asia.png" onmouseover="this.src='images/asia_hover.jpg'" width="100px" height="100px" onmouseout="this.src='images/cooking_chef_woman_asia.png'">
          <input type="hidden" name="num" value = "<?php echo $random[1]; ?>">
          <input type="image" src="images/cooking_chef_woman_black.png" onmouseover="this.src='images/black_hover.jpg'" width="100px" height="100px" onmouseout="this.src='images/cooking_chef_woman_black.png'">
          <input type="hidden" name="num" value = "<?php echo $random[2]; ?>">
          <input type="image" src="images/cooking_chef_woman_white.png" onmouseover="this.src='images/white_hover.jpg'" width="100px" height="100px" onmouseout="this.src='images/cooking_chef_woman_white.png'">
        </form>
      </div>
      <div class="balloon4">
        <p>だれにごはんを<br />
          つくってもらおうかな？<br />
          コックさんをクリックしてね！</p>
      <img src="images/necchusyou_face_boy1.png" width="20%" />
      </div>
     <div class="form_2">
        <form action="" method="post">
          <input type="hidden" value="" name="reset">
          <input type="image" src="images/reset_buttn_off.png" onmouseover="this.src='images/reset_buttn_on.png'" width="100px" height="100px" onmouseout="this.src='images/reset_buttn_off.png'" width="100px" style="margin-right: 20px;">
        </form>
      </div>
    </div>
    <div class="contents_box">
      <div class="food">
        <?php
//条件分岐ごとに$pointに数字を入れるプログラム
if(isset($_POST["num"])){
switch($_POST["num"]){
	case 0:
		echo '<img src="images/apple_doku_ringo.png" style="width: 100px"><br><br>';
		echo '<p class="food_text">毒リンゴ<br>-10kg</p>';
		$point = -15;

		break;
		
	case 1:
		echo '<img src="images/amount_water_glass3.png" style="width: 100px"><br><br>';
		echo '<p class="food_text">水<br>±0kg</p>';
		$point = 0;
		
		break;
		
	case 2:
		echo '<img src="images/food_curryruce.png" style="width: 100px"><br><br>';
		echo '<p class="food_text">カレー<br>+10kg</p>';
		$point = 15;
		
		break;
}//switch
}//if
?>
      </div>
      <?php
//配列に入れていくプログラム
if(isset($_SESSION["weight"]) && isset($_POST["num"])){//ボタン押したら通るところ
	$_SESSION["weight"][]=(int)$point;
	//echo "aaa";

}elseif(isset($_POST["num"])){//最初のページで通るところ
	$_SESSION["weight"] = array();//配列宣言
	$_SESSION["weight"][]=(int)70;//初期値70kg
	//echo "bbb";

}elseif(isset($_SESSION["weight"]) && isset($_POST["reset"])){//リセットボタン押したら通るところ
	unset($_SESSION["weight"]);
	unset($_POST["reset"]);
	//echo "ccc";
}//if


//セッションある時だけ
if(isset($_SESSION["weight"])){

  //デバック
  //echo "<pre>";
  //print_r($_SESSION["weight"]);
  //echo "</pre>";

  //配列の中身を足し算する。$sumに代入する
  $sum = array_sum($_SESSION["weight"]);
  
  //$sumの値を画像用に3倍にする
  $size = $sum * 3;
  
?>
      <div class="takashi">
        <?php
//合計体重によって、入院、爆発、たかしの画像を変えるプログラム
  if($sum < 30){
	  ?>
        <p class="unmei"><a href="takashi_kekka.php"><img src="images/takashi_kekka.jpg" onmouseover="this.src='images/kekka_hover.jpg'" onmouseout="this.src='images/takashi_kekka.jpg'" style="width: 100%"></a> </p>
        <?php
  }elseif($sum > 110){
	  ?>
        <p class="unmei"><a href="takashi_kekka.php"><img src="images/takashi_kekka.jpg" onmouseover="this.src='images/kekka_hover.jpg'" onmouseout="this.src='images/takashi_kekka.jpg'" style="width: 100%"></a> </p>
        <?php
  }else{//入院・爆発するまでは、ここでたかし画像の表示
/*  	  echo "<p>現在の体重は".$sum."kg</p>";
*/	  echo '<p class="takashi_img"><img src="images/necchusyou_face_boy1.png" style="width:'.$size.'px"></p>';
	  
  }//if

}//if
?>
      </div>
    </div>
  </div>
</div>
</div>

<!-- 星空 -->
<div class="back">
  <div class="code-preview center">
    <div id="starfield">
      <pre>
<script>
$("body").quietflow({
  theme : "starfield"
})
</script>
</pre>
    </div>
  </div>
</div>
<!-- //星空 -->

</body>
</html>
