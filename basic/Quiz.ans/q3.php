<?php

echo '文字列と整数を半角スペース区切りで入力して下さい => ';

[$str, $n] = explode(" ", trim(fgets(STDIN)));

$disp = "";
for ($i=0; $i<$n; $i++) {
  $disp .= $str;
}
echo $disp . PHP_EOL;

// printf("%s, %d", $str, $n);