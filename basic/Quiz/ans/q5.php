<?php

/**
  * 引数で与えられた整数型の配列で、配列の要素数が1以上で、最初の要素と最後の要素
  * が等しい場合trueを返す。
  * そうでない場合はfalseを返す関数
  * 例：
  * 　sameFirstLast([1, 2, 3]) → false
  * 　sameFirstLast([1, 2, 3, 1]) → true
  * 　sameFirstLast([1, 2, 1]) → true
  * 
  * @param array array $nums
  * 
  * @return 上記の条件に従ってbool値(trueまたはfalse)を返す
  * 
  */
function sameFirstLast(array $nums) : bool
{
  // 配列の要素数が１以上か
  if (count($nums) >= 1) {
    if ($nums[0] == $nums[count($nums) - 1]) {
      return true;
    }
  }
  // 最初の要素と最後の要素が等しいか

  $ret = false;
  return $ret;
}

$items = [
  'sameFirstLast([1, 2, 3]) → false' => [[1, 2, 3], false],
  'sameFirstLast([1, 2, 3, 1]) → true' => [[1, 2, 3, 1], true],
  'sameFirstLast([1, 2, 1]) → true' => [[1, 2, 1], true],
  'sameFirstLast([7]) → true' => [[7], true],
  'sameFirstLast([]) → false' => [[], false],
  'sameFirstLast([1, 2, 3, 4, 5, 1]) → true' => [[1, 2, 3, 4, 5, 1], true],
  'sameFirstLast([1, 2, 3, 4, 5, 13]) → false' => [[1, 2, 3, 4, 5, 13], false],
  'sameFirstLast([13, 2, 3, 4, 5, 13]) → true' => [[13, 2, 3, 4, 5, 13], true],
  'sameFirstLast([7, 7]) → true' => [[7, 7], true],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = sameFirstLast($params[0]);
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

