
<?php

$height = (float)trim(fgets(STDIN));      // 身長
$weight = (float)trim(fgets(STDIN));      // 体重
$howto = (float)trim(fgets(STDIN));       // 計算方法

$wc = new WeightCheck($height, $weight, $howto);
$wc->calcStdWeight();
$wc->display();

class WeightCheck {
  private $height;      // 身長
  private $weight;      // 体重
  private $stdWeight;   // 標準体重
  private $howto;       // 計算方法

  // 入力値のセット（コンストラクタ）
  function __construct($height, $weight, $howto) {
    $this->height = $height;
    $this->weight = $weight;
    $this->howto = $howto; 
  }

  // 標準体重の計算
  function calcStdWeight() {
    if ($this->howto == 1) {
      $this->stdWeight = floor(($this->height - 100) * 0.9 * 10) / 10;
    } else {
      $this->stdWeight = floor(($this->height / 100) * ($this->height / 100) * 22 * 10) / 10;
    }
  }

  // 標準出力
  function display() {
    echo $this->stdWeight . PHP_EOL;
    if ($this->weight > $this->stdWeight) {
      echo 'over' . PHP_EOL;
    }
  }
}
