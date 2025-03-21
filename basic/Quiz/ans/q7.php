<?php

/**
  * 引数で与えられた整数型の配列の偶数の要素の数を返す
  * 例：
  * 　countEvens([2, 1, 2, 3, 4]) → 3
  * 　countEvens([2, 2, 0]) → 3
  * 　countEvens([1, 3, 5]) → 0
  * 
  * @param array array $nums
  * 
  * @return 引数で与えられた整数型の配列の偶数の要素の数を返す
  * 
  */
function countEvens(array $nums) : int
{
  $count = 0;

  for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] % 2 == 0) {
      $count += 1;
    }
  }

  return $count;
}

$items = [
  'countEvens([2, 1, 2, 3, 4]) → 3' => [[2, 1, 2, 3, 4], 3],
  'countEvens([2, 2, 0]) → 3' => [[2, 2, 0], 3],
  'countEvens([1, 3, 5]) → 0' => [[1, 3, 5], 0],
  'countEvens([]) → 0' => [[], 0],
  'countEvens([11, 9, 0, 1]) → 1' => [[11, 9, 0, 1], 1],
  'countEvens([2, 11, 9, 0]) → 2' => [[2, 11, 9, 0], 2],
  'countEvens([2]) → 1' => [[2], 1],
  'countEvens([2, 5, 12]) → 2' => [[2, 5, 12], 2],
];
$message = "";

foreach ($items as $item => $params) {
  $ret = countEvens($params[0]);
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

