<?php
class employee {
  private $number;
  private $name;

  public function __construct($number, $name) {
    $this->number = $number;
    $this->name = $name;
  }

  public function getnum(){
    return $this->number;
  }
  public function getname(){
    return $this->name;
  }
}

// 自分の得意な言語で
// Let's チャレンジ！！
$n = intval(fgets(STDIN));

$employees = [];
$inputNo = 1;

for ($i=0; $i<$n; $i+=1) {
  $input = explode(' ', fgets(STDIN));
  $command = trim($input[0]);
  $param1 = intval($input[1]);
  if ($command == 'make') {
    $param2 = trim($input[2]);
    $employees[$inputNo] = new employee($param1, $param2);
    $inputNo += 1;
  } else if ($command == 'getname'){
    echo $employees[$param1]->getname() . PHP_EOL;
  } else {  // getno
    echo $employees[$param1]->getnum() . PHP_EOL;
  }
  // var_dump($command, $param1, $param2);
}
?>