<?php

echo '文字列と整数を半角スペース区切りで入力して下さい => ';

[$str, $n] = explode(" ", trim(fgets(STDIN)));

printf("%s, %d \n", $str, $n);

// ここで、$str、$nに入っている値を使用して、
// 上の条件で文字列を表示する
// $str -> 表示する文字列
// $n -> 表示する回数
// Hi 2 -> $str = Hi, $n = 2 -> HiHi
// Hi 3 -> $str = Hi, $n = 3 -> HiHiHi
// abc 1 -> $str = abc, $n = 1 -> abc

for ($i = 0; $i < $n; $i++) {
  echo $str; 
}

