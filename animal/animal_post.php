<?php
session_start();
?>
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
<?php
//データ受信
$year=$_POST["year"];
$month=$_POST["month"];
$day=$_POST["day"];
//早見表から数字を抽出
$dsn="mysql:dbname=animal;host=localhost;port=8888;charset=utf8";
$user="stpf_users";
$password="dbstpfusers";
$dbinfo=new PDO($dsn,$user,$password);
$sql="SELECT $month from animal WHERE year=$year";
$stmt=$dbinfo->query($sql);
foreach($stmt as $record){
	$record[$month];
}
$num=$record[$month];
//echo $num;
//早見表の数字とdayを足して、60以上なら60を引く
$animalNum=$num+$day;
if($animalNum >= 60){
	$animalNum -= 60;
}
//対応表のどうぶつの表示
switch($animalNum){
	case 3:
	case 9:
	case 15:
	case 34:
	case 40:
	case 46:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
  <p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "さる" ?>』</span>です！</p>
  <div id="doubutu"><img class="aImg" src="images/saru.png"></div>
  <table>
    <tr>
      <td rowspan="2">・長所</td>
      <td>小さなことにはよく気がつき、人に対する気配りがいい。</td>
    </tr>
    <tr>
      <td>人付き合いが上手。一生懸命で知識欲や好奇心が強い。</td>
    </tr>
    <tr>
      <td rowspan="2">・短所</td>
      <td>陽気でお調子者なので、早とちりやケアレスミスが異常に多い。</td>
    </tr>
    <tr>
      <td>自分一人で物事に取り組むのが苦手。</td>
    </tr>
    
      <td>・向いている仕事</td>
      <td>デザイナー、出版関係</td>
    </tr>
  </table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 1:
	case 7:
	case 42:
	case 48:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "チーター" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/ti-ta.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>プラス思考。好奇心旺盛。</td>
  </tr>
  <tr>
    <td>失敗にくよくよしない前向きさ。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>あきらめが早く、持続力に欠ける。</td>
  </tr>
  <tr>
    <td>肝心なところが無責任。態度が大きい。</td>
  </tr>
  
    <td rowspan="2">・向いている仕事</td>
    <td>営業、スポーツインストラクター</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 5:
	case 44:
	case 50:
	case 53:
	case 56:
	case 59:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "クロヒョウ" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/panther_black.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>性格は控えめだが、リーダーになると意外な実力を見せる。</td>
  </tr>
  <tr>
    <td>新しいモノ好きで情報通。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>傷つきやすくナイーブすぎて、扱いにくいところがある。</td>
  </tr>
  <tr>
    <td>飽きっぽい。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>美容師、エステシャン、モデル</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 51:
	case 52:
	case 57:
	case 58:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "ライオン" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/lion.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>自分にも他人にも厳しいが、信頼がある。完璧主義で頑張り屋。</td>
  </tr>
  <tr>
    <td>精神的に自立していて弱音を吐かず、自分の体験や知識の中で解決しようとできる。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>妥協できない。目立つのが当たり前と思っているところがある。</td>
  </tr>
  <tr>
    <td>他人の目に敏感なので、失敗を恐れて思い切ったことがなかなかできない。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>カメラマン、教師</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 6:
	case 43:
	case 49:
	case 54:
	case 55:
	case 60:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "とら" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/tora.png"></div>
<table>
  <tr>
    <td rowspan="5">・長所</td>
    <td>バランス感覚に優れているので、仕事とプライベートをうまく両立できる。</td>
  </tr>
  <tr>
    <td>気力や体力がある。</td>
  </tr>
  <tr>
    <td>一度決めたことを根性と頑張りでとことんやり通す強さがある。</td>
  </tr>
  <tr>
  <tr>
    <td>面倒見がよく、頼まれると断れないお人よし。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>自分だけが正しいという思い込みの激しさがある。</td>
  </tr>
  <tr>
    <td>言葉がキツイ。器用貧乏や便利屋になりがち。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>弁護士</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 2:
	case 8:
	case 41:
	case 47:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "たぬき" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/tanuki.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>返事のよさは天下一品で、先輩や上司から例外無く可愛がられる。世渡り上手。</td>
  </tr>
  <tr>
    <td>他人の長所や短所を見つけてあげるのが上手。<br />
      色々なタイプの人と友達になれる。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>忘れっぽく、無責任でいい加減なところがある。</td>
  </tr>
  <tr>
    <td>人から聞いた話をまるで自分のことのように話す悪いくせがある。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>営業、タレントマネージャー、プロダクション社長</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 4:
	case 10:
	case 16:
	case 33:
	case 39:
	case 45:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "コアラ" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/koala.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>心にゆとりがある。</td>
  </tr>
  <tr>
    <td>周りを明るくしようというサービス精神の持ち主。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>面倒くさがり。</td>
  </tr>
  <tr>
    <td>慎重でいて要領が良いところがズルく思われてしまいがち。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>イベント・リゾート関係のプランナー、タレント</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 12:
	case 18:
	case 31:
	case 37:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "ぞう" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/zou.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>一度決めたことは最後までやり遂げる有言実行型。</td>
  </tr>
  <tr>
    <td>地道にコツコツと努力する。密かな情熱家。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>意外と人の話をよく聞いていない。</td>
  </tr>
  <tr>
    <td>頑固で意地っ張り。言いにくいことをハッキリと言ってしまうときがある。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>医師、伝統工芸業</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 14:
	case 20:
	case 23:
	case 26:
	case 29:
	case 35:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "ひつじ" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/hitsuji.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>個人行動の苦手な寂しがり屋なので、相談を持ちかけられると<br />
      他の誰よりも親身になってくれる</td>
  </tr>
  <tr>
    <td>人なつっこく、助け合いの精神で人のために働くことも苦にしない、友情に厚い人。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>常識にこだわり、窮屈で融通が利かないと思われがち。</td>
  </tr>
  <tr>
    <td>自分から人に心を開くのが苦手。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>福祉関係、カウンセラー、大学の研究者</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 21:
	case 22:
	case 27:
	case 28:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "ペガサス" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/pegasus.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>想像力・ひらめきなどの感性がある。エネルギッシュ。</td>
  </tr>
  <tr>
    <td>ピンチをチャンスに変えられる不思議な力がある。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>人の意見を聞かない。他人には無関心。</td>
  </tr>
  <tr>
    <td>お天気屋で、約束を平気でドタキャンする傾向がある。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>外資系企業、スチュワーデス</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 13:
	case 19:
	case 24:
	case 25:
	case 30:
	case 36:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "おおかみ" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/ookami.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>周りに流されず、自分の流儀をしっかりもっている。</td>
  </tr>
  <tr>
    <td>心を許した仲間にはとても優しい。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>自分の気持ちを説明するのが苦手。</td>
  </tr>
  <tr>
    <td>とっつきにくい人と思われやすい。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>作家、ライター、料理人</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	case 11:
	case 17:
	case 32:
	case 38:
	$_SESSION["ani_type"] = $ani_type;
	?>
<div class="white-box">
<p class="aTitle">あなたのどうぶつキャラは<span class="red">『<?php echo $ani_type = "こじか" ?>』</span>です！</p>
<div id="doubutu"><img class="aImg" src="images/shika.png"></div>
<table>
  <tr>
    <td rowspan="2">・長所</td>
    <td>心がキレイで情が深い。</td>
  </tr>
  <tr>
    <td>裏表が無い。純粋で優しい。</td>
  </tr>
  <tr>
    <td rowspan="2">・短所</td>
    <td>人に頼りがちで、決断力が無い。行動範囲が狭い。</td>
  </tr>
  <tr>
    <td>キレると、別人のようになるコワイ一面を持つ。</td>
  </tr>
  
    <td>・向いている仕事</td>
    <td>ガーデニング業、幼稚園の先生、動物園の飼育係</td>
  </tr>
</table>
  <ul class="flex">
    <li><a href="animal.php"><img src="images/navigationj_back.png" alt="もどる" width="200" /></a></li>
    <li><a href="susumu.php"><img src="images/navigationj_go.png" alt="すすむ" width="200" /></a></li>
    <li><a href="home.php"><img src="images/navigationj_top.png" alt="ホームへ" width="200" /></a></li>
  </ul>
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
<?php
	break;
	
	}
?>
</body>
</html>
