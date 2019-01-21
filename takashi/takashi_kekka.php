<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>たかしくんの運命は...</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/clearfix.css" rel="stylesheet" type="text/css" />
<link href="css/takashistyle.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/quietflow.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
         //queue()で処理を溜めてdequeue()で実行。500経ったらfadeOut()
        $("#timeout").fadeIn().queue(function() {
            setTimeout(function(){$("#timeout").dequeue();
            }, 1000);
        });
        $("#timeout").fadeOut();
});
</script>

</head>

<body>
<!--背景の白枠-->
<div class="white-box">
  <div id="nakami">
  
<?php
$sum = array_sum($_SESSION["weight"]);//体重を足し算する
if($sum > 70){
?>
   
<div class="takashi_bakuhatsu">
	<h1>たかし君は<span>ぷくぷく</span>してしまったので爆発...</h1>
<a href="../index.html" class="from_takashi_to_top"><img src="images/top.png" /></a>
<div id="timeout">
	<img src="images/bakuhatsu4.png" width="100%" class="bakuhatsu" />
</div>

</div>

<?php
  }else{
?>

<div class="takashi_nyuin">
	<h1>たかし君は<span>げっそり</span>してしまったので入院...</h1>
<a href="../index.html" class="from_takashi_to_top"><img src="images/top.png" /></a>
<div id="timeout">
	<img src="images/medical_nyuin_man_cry.png" width="100%" class="nyuin" />
</div>

</div>

<?php
  }
  ?>


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