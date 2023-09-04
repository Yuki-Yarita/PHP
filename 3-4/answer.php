<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$ansName = $_POST['my_name'];
$ansNum = $_POST['ansNum'];
$ansLang = $_POST['ansLang'];
$ansSql = $_POST['ansSql'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function answer($selected, $correct) {
  if($selected == $correct) {
    return '正解！';
  }else {
    return '残念・・・';
  }
}
?>

<p class="centerText"><!--POST通信で送られてきた名前を表示--><?php echo $ansName; ?>さんの結果は・・・？</p>
<div class="centerText">①の答え</div>
<!--作成した関数を呼び出して結果を表示-->
<div class="centerText">
  <?php echo answer($_POST['portNumber'], $ansNum); ?>
</div>
<div class="centerText">②の答え</div>
<!--作成した関数を呼び出して結果を表示-->
<div class="centerText">
  <?php echo answer($_POST['devLang'], $ansLang); ?>
</div>
<div class="centerText">③の答え</div>
<!--作成した関数を呼び出して結果を表示-->
<div class="centerText">
  <?php echo answer($_POST['mySql'], $ansSql); ?>
</div>