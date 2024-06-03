<?php
class Minor {
  private $age;
  protected $sum = 0;
  protected $isPresent = true; // 退席を表す変数

  // クラス変数
  public static $totalCustomers = 0;
  public static $totalRevenue = 0;
  public static $currentCustomers = 0; // 現在の顧客数
  public static $totalLeftCustomers = 0; // 退席した顧客数
  
  public function __construct($age) {
    $this->age = $age;
    self::$totalCustomers++; // クラス変数のインクリメント
    self::$currentCustomers++; // 現在の顧客数をインクリメント
  }

  public function getAge() {
    return $this->age;
  }

  public function orderFood($price) {
    if ($this->isPresent) {
      $this->sum += $price;
    }
  }

  public function orderSoftdrink($price) {
    if ($this->isPresent) {
      $this->sum += $price;
    }
  }

  public function getSum() {
    return $this->sum;
  }

  public function leave() {
    if ($this->isPresent) {
      $this->isPresent = false;
      self::$currentCustomers--; // 現在の顧客数をデクリメント
      self::$totalLeftCustomers++; // 退席した顧客数をインクリメント
    }
  }

  public function isPresent() {
    return $this->isPresent;
  }

}

class Adult extends Minor {
  private $discount = false;

  public function orderAlcohol($price) {
    if ($this->isPresent) {
      $this->sum += $price;
      if (!$this->discount) {
        $this->discount = true;
      }
    }
  }

  public function orderFood($price) {
    if ($this->isPresent) {
      parent::orderFood($price);
      if ($this->discount) {
        $this->sum -= 200;
      }
    }
  }
}

$input_line = fgets(STDIN);
$input = explode(' ', $input_line);
$n = intval($input[0]);
$k = intval($input[1]);

$cusomers = [];

for ($i=1; $i <= $n; $i+=1) {
  $age = intval(fgets(STDIN));
  if ($age < 20) {
    $cusomers[$i] = new Minor($age);
  } else {
    $cusomers[$i] = new Adult($age);
  }
}

// var_dump($cusomers);

for ($i=0; $i<$k; $i+=1) {
  fscanf(STDIN , "%d %s %d", $no, $order, $price);

  // ビールフェス
  if ($order == 0) {
    $order = 'alcohol';
    $price = 500;
  }

  // 退席の処理
  if ($order == 'A') {
    $cusomers[$no]->leave();
    echo $cusomers[$no]->getSum() . PHP_EOL;
    continue;
  }

  // var_dump($no, $order, $price);
  if ($order == 'alcohol') {
    if ($cusomers[$no]->getAge() >= 20) {
      $cusomers[$no]->orderAlcohol($price);
    }
  } else if ($order == 'food') {
    $cusomers[$no]->orderFood($price);
  } else if ($order == 'softdrink') {
    $cusomers[$no]->orderSoftdrink($price);
  }
}

// for ($i=1; $i<=$n; $i+=1) {
//   if (!$cusomers[$i]->isPresent()) {
//     echo $cusomers[$i]->getSum() . PHP_EOL;
//   }
// }

// echo Minor::$totalCustomers . PHP_EOL;      // トータルの人数
echo Minor::$totalLeftCustomers . PHP_EOL;  // 退席した人数
// echo Minor::$currentCustomers . PHP_EOL;    // 現在の人数

?>