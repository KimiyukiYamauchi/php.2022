<?php

$price; // 金額
$count; // 枚数
$types = [10000, 5000, 1000, 500, 100, 50, 10, 5, 1]; // 金額

$price = (int)trim(fgets(STDIN));

// 以下にコードを追記してください
for ($i = 0; $i < count($types); $i++) {
  if (floor($price/$types[$i]) !== 0) { // その金種が取れるか？
    $count = floor($price/$types[$i]);  // 金種の枚数をセット
    echo $count . PHP_EOL;              // 枚数の表示
    $price -= $types[$i] * $count;      // 表示した分を元の金額から引く
  } else {
    echo 0 . PHP_EOL;                   // 金種が取れないときは０
  }
}