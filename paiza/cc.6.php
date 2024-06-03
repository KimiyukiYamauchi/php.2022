<?php
class Node {
  private $letter;
  private $route1;
  private $route2;

  public function __construct($letter, $route1, $route2) {
    $this->letter = $letter;
    $this->route1 = $route1;
    $this->route2 = $route2;
  }

  public function getLetter() {
    return $this->letter;
  }

  public function getRoute($no) {
    if ($no == 1) {
      return $this->route1;
    } else {
      return $this->route2;
    }
  }
}

fscanf(STDIN, '%d %d %d', $numberOfPoints, $numberOfMovements, $startingPoint);

$nodes = [];

for ($i=1; $i<=$numberOfPoints; $i+=1) {
  fscanf(STDIN, '%s %d %d', $letter, $route1, $route2);
  $nodes[$i] = new Node($letter, $route1, $route2);
}

$spell = $nodes[$startingPoint]->getLetter();
for ($i=1, $curNode=$nodes[$startingPoint]; $i<=$numberOfMovements; $i+=1) {
  $nextPointNo = intval(fgets(STDIN));
  $curNode = $nodes[$curNode->getRoute($nextPointNo)];
  $spell .= $curNode->getLetter();
}

echo $spell . PHP_EOL;
?>