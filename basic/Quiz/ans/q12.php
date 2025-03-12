
<?php

/**
  * 引数で与えられた文字列を要素とする配列から、配列のすべての異なる文字列をキーと
  * し、その出現回数を値とする連想配列を作成し返す関数(wordCount)を実装する
  * 例：
  * 　wordCount(["a", "b", "a", "c", "b"]) → {"a": 2, "b": 2, "c": 1}
  * 　wordCount(["c", "b", "a"]) → {"a": 1, "b": 1, "c": 1}
  * 　wordCount(["c", "c", "c", "c"]) → {"c": 4}
  *
  * @param array array $map
  * 
  * @return int 上記の処理によって作成された連想配列を返す
  * 
  */
function wordCount(array $map) : array
{
  $ret = [];

  for ($i = 0; $i < count($map); $i++) {
    if (array_key_exists($map[$i], $ret)) {
      $ret[$map[$i]] += 1;
    } else {
      $ret[$map[$i]] = 1;
    }
  }
  return $ret;
}

$items = [
  'wordCount(["a", "b", "a", "c", "b"]) → {"a": 2, "b": 2, "c": 1}' => [["a", "b", "a", "c", "b"], ["a"=>2, "b"=>2, "c"=>1]],
  'wordCount(["c", "b", "a"]) → {"a": 1, "b": 1, "c": 1}' => [["c", "b", "a"], ["a"=>1, "b"=>1, "c"=>1]],
  'wordCount(["c", "c", "c", "c"]) → {"c": 4}' => [["c", "c", "c", "c"], ["c"=>4]],
  'wordCount([]) → {}' => [[], []],
  'wordCount(["this", "and", "this", ""]) → {"": 1, "and": 1, "this": 2}' => [["this", "and", "this", ""], [""=>1, "and"=>1, "this"=>2]],
  'wordCount(["x", "y", "x", "Y", "X"]) → {"x": 2, "X": 1, "y": 1, "Y": 1}' => [["x", "y", "x", "Y", "X"], ["x"=>2, "X"=>1, "y"=>1, "Y"=>1]],
  'wordCount(["123", "0", "123", "1"]) → {"0": 1, "1": 1, "123": 2}' => [["123", "0", "123", "1"], ["0"=>1, "1"=>1, "123"=>2]],
  'wordCount(["d", "a", "e", "d", "a", "d", "b", "b", "z", "a", "a", "b", "z", "x", "b", "f", "x", "two", "b", "one", "two"]) → {"a": 4, "b": 5, "d": 3, "e": 1, "f": 1, "one": 1, "x": 2, "z": 2, "two": 2}' => [["d", "a", "e", "d", "a", "d", "b", "b", "z", "a", "a", "b", "z", "x", "b", "f", "x", "two", "b", "one", "two"], ["a"=>4, "b"=>5, "d"=>3, "e"=>1, "f"=>1, "one"=>1, "x"=>2, "z"=>2, "two"=>2]],
  'wordCount(["apple", "banana", "apple", "apple", "tea", "coffee", "banana"]) → {"banana": 2, "apple": 3, "tea": 1, "coffee": 1}' => [["apple", "banana", "apple", "apple", "tea", "coffee", "banana"], ["banana"=>2, "apple"=>3, "tea"=>1, "coffee"=>1]],

];
$message = "";

foreach ($items as $item => $params) {
  $ret = wordCount($params[0]);
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