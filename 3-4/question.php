<link rel="stylesheet" href="style.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$portNumber = [80, 22, 20, 21];
$devLang = ["PHP", "Python", "JAVA", "HTML"];
$mySql = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ansNum = $portNumber[0];
$ansLang = $devLang[3];
$ansSql = $mySql[1];

?>
<p class="centerText">お疲れ様です<?php echo $my_name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method = "post" class="centerText">
<h2 class="centerText">①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($portNumber as $key => $value) { ?>
  <input type="radio" name="portNumber" value="<?php echo $value; ?>"> <?php echo $value; ?>
<?php } ?>

<h2 class="centerText">②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($devLang as $key => $value) { ?>
  <input type="radio" name="devLang" value="<?php echo $value; ?>"> <?php echo $value; ?>
<?php } ?>

<h2 class="centerText">③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($mySql as $key => $value) { ?>
  <input type="radio" name="mySql" value="<?php echo $value; ?>"> <?php echo $value; ?>
<?php } ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="hidden" name="ansNum" value="<?php echo $ansNum; ?>">
<input type="hidden" name="ansLang" value="<?php echo $ansLang; ?>">
<input type="hidden" name="ansSql" value="<?php echo $ansSql; ?>">
<br>
<input type="submit" value="回答する" class="btn">
</form>