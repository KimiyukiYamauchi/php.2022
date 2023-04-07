<?php   //PHPを利用する場合、先頭の<?php は必須です。

/**
  * 1つの引数(文字列)に文字'e'が1つまたは3つ含まれている場合はtrueを返す。
  * それ以外ははfalseを返す
  * 例：
  * 　　stringE("Hello") → true
  * 　　stringE("Heelle") → true
  * 　　stringE("Heelele") → false
  * 
  * @param int $str 文字列
  * 
  * @return 1つの引数(文字列)に文字'e'が1つまたは3つ含まれている場合はtrueを返す。
  * 　　　　それ以外ははfalseを返す
  * 
  */
function stringE(string $str)  : bool
{
    return false;
}

$items = [
  'stringE("Hello") → true' => ['Hello', true],
  'stringE("Heelle") → true' => ['Heelle', true],
  'stringE("Heelele") → false' => ['Heelele', false],
  'stringE("Hll") → false' => ['Hll', false],
  'stringE("e") → true' => ['e', true],
  'stringE("") → false' => ['', false],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = stringE($params[0]);
  if ($ret != $params[1]) {
    $ret = $ret ? 'true' : 'false';
    $message .= $item . ': ' . $ret .  '(実際の値)' . PHP_EOL;
  }
}

if ($message == "") {
  echo 'OK' . PHP_EOL;
} else {
  echo 'NGのテスト項目' . PHP_EOL;
  echo $message;
}

