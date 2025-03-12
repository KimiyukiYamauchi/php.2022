<?php

$n = fgets(STDIN);

// $n個の数字を受け取って、最大値と最小値を求める処理を書く

// $max = -1;
// $min = 101;

// for ($i = 0; $i < $n; $i++) {
//   $num = fgets(STDIN);
//   if ($num > $max) {
//     $max = $num;
//   }
//   if ($num < $min) {
//     $min = $num;
//   }
// }

// echo $max;
// echo $min;


$nums = [];
for ($i = 0; $i < $n; $i++) {
  $nums[] = fgets(STDIN);
}

echo max($nums);
echo min($nums);