<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>どうぶつ占い</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/clearfix.css" rel="stylesheet" type="text/css" />
<link href="css/animal_style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/quietflow.min.js"></script>
</head>

<body>
<div class="white-box">
<div id="main">
    <img src="images/animal_top.jpg" width="600" height="300" alt="どうぶつ占い" />
</div>
<div id="textBox1">
<p id="textAni1">このどうぶつ占いは生年月日から分かるその人の性格を、ライオン・チータ・ペガサス・ゾウ・さる・おおかみ・コアラ・とら・クロヒョウ、ひつじ、たぬき、こじか の12の動物キャラに分類して分析したものです。自分では気づいていなかった意外な部分を再発見するかも？</p></div>
<div id="textBox2">
<p id="textAni2">生年月日を入力してください！</p>
</div>
<div id="aniform">
<form action="animal_post.php" method="post">
<div class="flex">
<div class="cp_ipselect cp_sl04">
  <select name="year" required>
	<option value="">年</option>  
    <?php foreach(range(1950,2000) as $year): ?>
    <option value="<?php echo $year?>">
    <?php echo $year?>
    </option>
    <?php endforeach; ?>
  </select>
 </div>
<div class="cp_ipselect cp_sl04">
<?php
$mon=['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dece'];
?>
  <select name="month" required>
    <option value="">月</option>
    <?php foreach(range(1,12) as $month): ?>
    <option value="<?php echo $mon[$month-1];?>"><!--配列は0からはじまるので-1する-->
    <?php echo $month?>
    </option>
    <?php endforeach; ?>
  </select>
  </div>
<div class="cp_ipselect cp_sl04">
  <select name="day" required>
    <option value="">日</option>
    <?php foreach(range(1,31) as $day): ?>
    <option value="<?php echo str_pad($day,2,0,STR_PAD_LEFT)?>">
    <?php echo $day?>
    </option>
    <?php endforeach; ?>
  </select>
  </div>
  </div>
  <div id="send">
  <input type="submit" value="送信" class="button">
  </div>
  </form>
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
