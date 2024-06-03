<?php
class Minor {
  private $age;
  protected $sum;

  public function __construct($age) {
    $this->age = $age;
    $this->sum = 0;
  }

  public function getAge() {
    return $this->age;
  }

  public function orderFood($price) {
    $this->sum += $price;
  }

  public function orderSoftdrink($price) {
    $this->sum += $price;
  }

  public function getSum() {
    return $this->sum;
  }

}

class Adult extends Minor {
  private $discount;

  public function __construct($age) {
    parent::__construct($age);
    $this->discount = false;
  }

  public function orderAlcohol($price) {
    $this->sum += $price;

    if (!$this->discount) {
      $this->discount = true;
    }
  }

  public function orderFood($price) {
    parent::orderFood($price);
    if ($this->discount) {
      $this->sum -= 200;
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

for ($i=1; $i<=$n; $i+=1) {
  echo $cusomers[$i]->getSum() . PHP_EOL;
}

?>