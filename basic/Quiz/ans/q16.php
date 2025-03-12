<?php

$sYear = (float)trim(fgets(STDIN));       // 開始年
$sMonth = (float)trim(fgets(STDIN));      // 開始月
$eYear = (float)trim(fgets(STDIN));       // 終了年
$eMonth = (float)trim(fgets(STDIN));      // 終了月

$output = "入力値不正";

if ($sYear >= 0 && $sYear <= 9999
    && $sMonth >= 1 && $sMonth <= 12
    && $eYear >= 0 && $eYear <= 9999
    && $eMonth >= 1 && $eMonth <= 12) {
    // 開始日付の生成
    $sd = new DateTime();
    $sd->setDate($sYear, $sMonth, 1);

    // 終了日付の生成
    $ed = new DateTime();
    $ed->setDate($eYear, $eMonth, 1);

    // 開始日付と終了日付の日付の差
    $interval = $sd->diff($ed);

    // 終了日付が開始日付よりも後の場合のみ求める
    if (!$interval->invert) {
      $year = $interval->format('%Y');
      $month = $interval->format('%m');

      $output = $year . '年' . $month . 'か月';
    }
  // if ($eYear > $sYear) {
  //   if ($eMonth >= $sMonth) { // 2023、2、2024、5
  //     $output = ($eYear - $sYear) . "年";
  //     $output .= ($eMonth - $sMonth) . "か月";
  //   } else { //  2023、5、2024、3
  //     $output = ($eYear - $sYear -  1)  . "年";
  //     $output .= ($eMonth + 12 - $sMonth) . "か月";
  //   }

  // } else if ($eYear == $sYear && $eMonth >= $sMonth) { // 2023、5、2023、10
  //   $output = "0年" . ($eMonth - $sMonth) . "か月";
  // }

}

echo $output;