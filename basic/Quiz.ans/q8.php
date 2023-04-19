<?php

/**
  * 引数で与えられた整数型の配列(1つ以上の要素を持つ)の最大値と最小値の差を返す
  * 例：
  * 　bigDiff([10, 3, 5, 6]) → 7
  * 　bigDiff([7, 2, 10, 9]) → 8
  * 　bigDiff([2, 10, 7, 2]) → 8
  * 
  * @param array array $nums
  * 
  * @return int 最大値と最小値の差を返す
  * 
  */
function bigDiff(array $nums) : int
{
  $len = count($nums);
  if ($len == 1) {
    return 0;
  }

  $min=PHP_INT_MAX;
  $max=PHP_INT_MIN;

  for ($i=0; $i<$len; $i+=1) {
    if ($min > $nums[$i]) {
      $min = $nums[$i];
    }
    if ($max < $nums[$i]) {
      $max = $nums[$i];
    }
  }

  return $max - $min;

  // $min = min($nums);
  // $max = max($nums);

  // return $max - $min;
}

$items = [
  'bigDiff([10, 3, 5, 6]) → 7' => [[10, 3, 5, 6], 7],
  'bigDiff([7, 2, 10, 9]) → 8' => [[7, 2, 10, 9], 8],
  'bigDiff([2, 10, 7, 2]) → 8' => [[2, 10, 7, 2], 8],
  'bigDiff([2, 10]) → 8' => [[2, 10], 8],
  'bigDiff([10, 2]) → 8' => [[10, 2], 8],
  'bigDiff([10, 0]) → 10' => [[10, 0], 10],
  'bigDiff([2, 3]) → 1' => [[2, 3], 1],
  'bigDiff([2, 2]) → 0' => [[2, 2], 0],
  'bigDiff([2]) → 0' => [[2], 0],
  'bigDiff([5, 1, 6, 1, 9, 9]) → 8' => [[5, 1, 6, 1, 9, 9], 8],
  'bigDiff([7, 6, 8, 5]) → 3' => [[7, 6, 8, 5], 3],
  'bigDiff([7, 7, 6, 8, 5, 5, 6]) → 3' => [[7, 7, 6, 8, 5, 5, 6], 3],
  'bigDiff([-7, -7, -6, -8, -5, -5, -6]) → 3' => [[-7, -7, -6, -8, -5, -5, -6], 3],
  // 'bigDiff([PHP_INT_MIN, 0]) → PHP_INT_MIN' => [[PHP_INT_MIN, 0], PHP_INT_MAX],
  // 'bigDiff([PHP_INT_MIN, PHP_INT_MIN-1]) → 1' => [[PHP_INT_MIN, PHP_INT_MIN-1],1],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = bigDiff($params[0]);
  if ($ret != $params[1]) {
    $message .= $item . ': ' . $ret .  '(実際の値)' . PHP_EOL;
  }
}

if ($message == "") {
  echo 'OK' . PHP_EOL;
} else {
  echo 'NGのテスト項目' . PHP_EOL;
  echo $message;
}