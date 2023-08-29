<?php

  //②フォームからのデータを受け取ります
$favoriteName = $_POST['favoriteName'];
$number = $_POST['number'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
$total = $number * mt_rand(1, 6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if($total >= 1 && $total <= 10) {
  $omikuzi = "凶";
}elseif($total <= 15) {
  $omikuzi = "小吉";
}elseif($total <= 20) {
  $omikuzi = "中吉";
}elseif($total <= 25) {
  $omikuzi = "吉";
}elseif($total <= 36) {
  $omikuzi = "大吉";
}else{
  $omikuzi = "残念";
};
//⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
date_default_timezone_set('Asia/Tokyo');
?>
  <p><?php echo date("Y年m月d日 H時i分s秒", time()); ?></p>
  <p>名前は<?php echo $favoriteName; ?>です。</p>
  <p>番号は<?php echo $number; ?>です。</p>
  <p>結果は<?php echo $total; ?>です。</p>
  <p>結果は<?php echo $omikuzi; ?>です。</p>