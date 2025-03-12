<?php

$tariff = [
  [3, 140], [6, 180], [10, 190], [15, 230], [20, 320], [25, 400], [30, 480], [35, 570], [40, 650], [50, 740]
  ];

//                   A  B  C  D  E  F  G  H  I  J
//                   B  C  D  E  F  G  H  I  J  K
//                   0  1  2  3  4  5  6  7  8  9
//                   1  2  3  4  5  6  7  8  9  10
$stationDistances = [1, 8, 3, 4, 5, 2, 3, 9, 4, 3];

// 乗車駅と降車駅の番号を入力してもらう
$start = (int)trim(fgets(STDIN));
$end = (int)trim(fgets(STDIN));

// 乗車駅と降車駅の番号から距離を求める

if ($start > $end) {
  // $work = $start;
  // $start = $end;
  // $end = $work;
  [$start, $end] = [$end, $start];
}
$distance = 0;
for ($i = $start; $i < $end; $i++) {
  $distance += $stationDistances[$i];
}


// $distance = (int)trim(fgets(STDIN));       // 距離

echo calcCharge($distance);

function calcCharge($distance) {
  global $tariff;
  $charge = 0;
  for ($i = 0; $i < count($tariff); $i++) {
    if ($distance <= $tariff[$i][0]) {
      $charge = $tariff[$i][1];
      break;
    } 
  }

  return $charge;
}
