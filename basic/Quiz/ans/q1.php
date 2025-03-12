<?php

echo '3つの値を半角スペース区切りで入力して下さい => ';

[$a, $b, $c] = explode(" ", trim(fgets(STDIN)));
printf("%d, %d, %d \n", $a, $b, $c);

// ここで$a, $b, $cの大きさを比較し、一番小さい値を
// echoで出力する
// 例えば$aが一番小さい場合
// echo $a;
// となる

// 1 2 3 -> 1
// 1 1 2 -> 1
// 2 2 2 -> 2
// 100 200 0 -> 0
// -100 100 -1000 -> -1000

// if ($a > $b) {
//   if ($b < $c) {
//     echo $b;
//   } else {
//     echo $c;
//   }
// } else {
//   if ($a < $c) {
//     echo $a;
//   } else {
//     echo $c;
//   }
// }

// echo $a < $b ?
//       ($a < $c ? $a : $c) :  ($b < $c ? $b : $c);


echo min($a, $b, $c);