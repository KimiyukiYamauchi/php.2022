<?php

/**
  * 要素[3, 1, 4]を持つint型の配列を返す関数
  * 例：
  * 　makePi() → [3, 1, 4]
  * 
  * @param array array $nums
  * 
  * @return 要素[3, 1, 4]を持つint型の配列を返す
  * 
  */
function makePi() : array
{
    $ret = [3, 1, 4];
    return $ret;
}

$items = [
  'makePi() → [3, 1, 4]' => [[3, 1, 4]],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = makePi();
  if ($ret != $params[0]) {
    $message .= 'error: '. PHP_EOL;
  }
}

if ($message == "") {
  echo 'OK' . PHP_EOL;
} else {
  echo 'NGのテスト項目' . PHP_EOL;
  print_r($ret);
}

