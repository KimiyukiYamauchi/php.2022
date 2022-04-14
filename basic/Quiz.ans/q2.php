<?php

$input;
do {
  echo '0以上23以下の整数を入力して下さい => ';
  $input = trim(fgets(STDIN));
} while (!($input >= 0 and $input <= 23));

if ($input >= 22 or $input < 6) {
  echo 'おやすみなさい' . PHP_EOL;
} else if ($input >= 6 and $input < 11) {
  echo 'おはようございます' . PHP_EOL;
} else if ($input >= 11 and $input < 16) {
  echo 'こんにちは' . PHP_EOL;
} else {
  echo 'こんばんは' . PHP_EOL;
}
echo $input;