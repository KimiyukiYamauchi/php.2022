<?php

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

$str = trim(fgets(STDIN));        // カウントする文字列の入力

$str_low = strtolower($str);      // 入力された文字列を小文字に変換

$chars = str_split($str_low);     // 文字列を配列に変換

$charCount = wordCount($chars);   // 配列の要素の出現回数をカウントする

ksort($charCount);                // キーの昇順で配列の要素をソート

// var_dump($charCount);

// 出力する

echo '入力された文字列:' . $str . PHP_EOL;
echo 'カウント結果' . PHP_EOL;

foreach ($charCount as $key => $value) {
  echo $key . ':' . $value . '回' . PHP_EOL;
}
