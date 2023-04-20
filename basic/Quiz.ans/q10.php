<?php

/**
  * 引数で与えられた連想配列に以下の処理を行いその連想配列を返す
  * "a"キーおよび"b"キーが共に存在する場合、その値を結合し、
  * キーを"ab"として連想配列に追加する
  *
  * 例：
  * 　mapAB({"a": "Hi", "b": "There"}) → {"a": "Hi", "ab": "HiThere", "b": "There"}
  * 　mapAB({"a": "Hi"}) → {"a": "Hi"}
  * 　mapAB({"b": "There"}) → {"b": "There"}
  * 
  * @param array array $map
  * 
  * @return int 上記の処理を行った連想配列を返す
  * 
  */
function mapAB(array $map) : array
{
  if (array_key_exists('a', $map) && array_key_exists('b', $map)) {
    $map["ab"] = $map["a"] . $map["b"];
  }
  return $map;
}

$items = [
  'mapAB({"a": "Hi", "b": "There"}) → {"a": "Hi", "ab": "HiThere", "b": "There"}' => [["a"=>"Hi", "b"=>"There"], ["a"=>"Hi", "ab"=>"HiThere", "b"=>"There"]],
  'mapAB({"a": "Hi"}) → {"a": "Hi"}' => [["a"=>"Hi"], ["a"=>"Hi"]],
  'mapAB({"b": "There"}) → {"b": "There"}' => [["b"=>"There"], ["b"=>"There"]],
  'mapAB({"c": "meh"}) → {"c": "meh"}' => [["c"=>"meh"], ["c"=>"meh"]],
  'mapAB({"a": "aaa", "ab": "nope", "b": "bbb", "c": "ccc"}) → {"a": "aaa", "ab": "aaabbb", "b": "bbb", "c": "ccc"}' => [["a"=>"aaa", "ab"=>"nope", "b"=>"bbb", "c"=>"ccc"], ["a"=>"aaa", "ab"=>"aaabbb", "b"=>"bbb", "c"=>"ccc"]],
  'mapAB({"ab": "nope", "b": "bbb", "c": "ccc"}) → {"ab": "nope", "b": "bbb", "c": "ccc"}' => [["ab"=>"nope", "b"=>"bbb", "c"=>"ccc"], ["ab"=>"nope", "b"=>"bbb", "c"=>"ccc"]],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = mapAB($params[0]);
  if ($ret != $params[1]) {
    $message .= $item . ': ' . disp($ret) .  '(実際の値)' . PHP_EOL;
  }
}

if ($message == "") {
  echo 'OK' . PHP_EOL;
} else {
  echo 'NGのテスト項目' . PHP_EOL;
  echo $message;
}

function disp($map) : string{
  $ret = '{';
  foreach ($map as $key => $value) {
    $ret .= $key . ': ' . $value . ', ';
  }
  $ret .= '}';
  return $ret;
}
