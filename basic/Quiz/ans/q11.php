<?php

/**
  * 引数で与えられた文字列を要素とする配列から、配列のすべての異なる文字列をキーと
  * し、値を1とする連想配列を作成し返す関数(word1)を実装する
  * 例：
  * 　word1(["a", "b", "a", "b"]) → {"a": 1, "b": 1}
  * 　word1(["a", "b", "a", "c", "b"]) → {"a": 1, "b": 1, "c": 1}
  * 　word1(["c", "b", "a"]) → {"a": 1, "b": 1, "c": 1}
  *
  * @param array array $map
  * 
  * @return int 上記の処理によって作成された連想配列を返す
  * 
  */
function word1(array $map) : array
{
  $ret = [];

  for ($i = 0; $i < count($map); $i++) {
    $ret[$map[$i]] = 1;
  }
  return $ret;
}

$items = [
  'word1(["a", "b", "a", "b"]) → {"a": 1, "b": 1}' => [["a", "b", "a", "b"], ["a"=>1, "b"=>1]],
  'word1(["a", "b", "a", "c", "b"]) → {"a": 1, "b": 1, "c": 1}' => [["a", "b", "a", "c", "b"], ["a"=>1, "b"=>1, "c"=>1]],
  'word1(["c", "b", "a"]) → {"a": 1, "b": 1, "c": 1}' => [["c", "b", "a"], ["a"=>1, "b"=>1, "c"=>1]],
  'word1(["c", "c", "c", "c"]) → {"c": 1}' => [["c", "c", "c", "c"], ["c"=>1]],
  'word1([]) → {}' => [[], []],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = word1($params[0]);
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