<?php

$input;
do {
  echo '0以上23以下の整数を入力して下さい => ';
  $input = trim(fgets(STDIN));
} while (!($input >= 0 and $input <= 23));

echo $input . PHP_EOL;

// ここで、$inputに入っている値をチェックし、
// 上の条件に合致するメッセージを表示する
// 22, 23, 0, 5 => おやすみなさい
// 6, 10 => おはようございます
// 11, 15 => こんにちは
// 16, 21 => こんばんは

if ($input == 22 || $input == 23 || $input >= 0 && $input < 6) {
  echo 'おやすみなさい';
} else if ($input >= 6 && $input < 11) {
  echo 'おはようございます';
} else if ($input >= 11 && $input < 16) {
  echo 'こんにちは';
} else {
  echo 'こんばんは';
}
