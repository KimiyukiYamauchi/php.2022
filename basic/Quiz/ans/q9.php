<?php

/**
  * 引数で与えられた連想配列配列に以下の処理を行いその連想配列を返す関数
  * (mapShare)を実装する(q9.php)

  * 例：
  * 　mapShare({"a"=>"aaa", "b"=>"bbb", "c"=>"ccc"}) → {"a"=>"aaa", "b"=>"aaa"}
  * 　mapShare({"b"=>"xyz", "c"=>"ccc"}) → {"b"=>"xyz"}
  * 　mapShare({"a"=>"aaa", "c"=>"meh", "d"=>"hi"}) → {"a"=>"aaa", "b"=>"aaa", "d"=>"hi"}
  * 
  * @param array array $map
  * 
  * @return int 上記の処理を行った連想配列を返す
  * 
  */
function mapShare(array $map) : array
{
  // 配列に"a"キーがあるか確認
  if (array_key_exists('a', $map)) {
    // 'b'キーに対して'a'の値をセットする
    $map['b'] = $map['a'];
  }
  // 配列から"c"キーの要素を削除
  unset($map['c']);
  return $map;
}

$items = [
  'mapShare({"a": "aaa", "b": "bbb", "c": "ccc"}) → {"a": "aaa", "b": "aaa"}' => [["a"=>"aaa", "b"=>"bbb", "c"=>"ccc"], ["a"=>"aaa", "b"=>"aaa"]],
  'mapShare({"b": "xyz", "c": "ccc"}) → {"b": "xyz"}' => [["b"=>"xyz", "c"=>"ccc"], ["b"=>"xyz"]],
  'mapShare({"a": "aaa", "c": "meh", "d": "hi"}) → {"a": "aaa", "b": "aaa", "d": "hi"}' => [["a"=>"aaa", "c"=>"meh", "d"=>"hi"], ["a"=>"aaa", "b"=>"aaa", "d"=>"hi"]],
  'mapShare({"a": "xyz", "b": "1234", "c": "yo", "z": "zzz"}) → {"a": "xyz", "b": "xyz", "z": "zzz"}' => [["a"=>"xyz", "b"=>"1234", "c"=>"yo", "z"=>"zzz"], ["a"=>"xyz", "b"=>"xyz", "z"=>"zzz"]],
  'mapShare({"a": "xyz", "b": "1234", "c": "yo", "d": "ddd", "e": "everything"}) → {"a": "xyz", "b": "xyz", "d": "ddd", "e": "everything"}' => [["a"=>"xyz", "b"=>"1234", "c"=>"yo", "d"=>"ddd", "e"=>"everything"], ["a"=>"xyz", "b"=>"xyz", "d"=>"ddd", "e"=>"everything"]],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = mapShare($params[0]);
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