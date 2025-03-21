<?php

/**
  * 引数で与えられた整数型の配列の最初または最後の要素が6の場合にtrueを返す
  * そうでない場合はfalseを返す関数
  * 例：
  * 　firstLast6([1, 2, 6]) → true
  * 　firstLast6([6, 1, 2, 3]) → true
  * 　firstLast6([13, 6, 1, 2, 3]) → false
  * 
  * @param array array $nums
  * 
  * @return 上記の条件に従ってbool値(trueまたはfalse)を返す
  * 
  */
function firstLast6(array $nums) : bool
{
  // 配列$numsの最初の要素と最後の要素を6かどうかチェックする
  // $numsの最初の要素  => $nums[0]
  // $numsの最後の要素  => $nums[要素数-1]、count($nums) -> $nums配列の要素数

  if ($nums[0] == 6) {
    return true;
  }

  if ($nums[count($nums)-1] == 6) {
    return true;
  }

  $ret = false;
  return $ret;
}

$items = [
  'firstLast6([1, 2, 6]) → true' => [[1, 2, 6], true],
  'firstLast6([6, 1, 2, 3]) → true' => [[6, 1, 2, 3], true],
  'firstLast6([13, 6, 1, 2, 3]) → false' => [[13, 6, 1, 2, 3], false],
  'firstLast6([13, 6, 1, 2, 6]) → true' => [[13, 6, 1, 2, 6], true],
  'firstLast6([3, 2, 1]) → false' => [[3, 2, 1], false],
  'firstLast6([3, 6, 1]) → false' => [[3, 6, 1], false],
  'firstLast6([3, 6]) → true' => [[3, 6], true],
  'firstLast6([6]) → true' => [[6], true],
  'firstLast6([3]) → false' => [[3], false],
  'firstLast6([5, 6]) → true' => [[5, 6], true],
  'firstLast6([5, 5]) → false' => [[5, 5], false],
  'firstLast6([1, 2, 3, 4, 6]) → true' => [[1, 2, 3, 4, 6], true],
  'firstLast6([1, 2, 3, 4]) → false' => [[1, 2, 3, 4], false],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = firstLast6($params[0]);
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

