<?php
class Hero {
  private $level;      // レベル
  private $hp;         // 体力 (Hit Points)
  private $attack;     // 攻撃力
  private $defense;    // 防御力
  private $speed;      // 素早さ
  private $intelligence; // 賢さ
  private $luck;       // 運

  public function __construct
    ($level, $hp, $attack, $defense, $speed, $intelligence, $luck) {
    $this->level = $level;
    $this->hp = $hp;
    $this->attack = $attack;
    $this->defense = $defense;
    $this->speed = $speed;
    $this->intelligence = $intelligence;
    $this->luck = $luck;
  }

public function updateAttributes($attributes) {
    if (isset($attributes['level'])) {
        $this->level += $attributes['level'];
    }
    if (isset($attributes['hp'])) {
        $this->hp += $attributes['hp'];
    }
    if (isset($attributes['attack'])) {
        $this->attack += $attributes['attack'];
    }
    if (isset($attributes['defense'])) {
        $this->defense += $attributes['defense'];
    }
    if (isset($attributes['speed'])) {
        $this->speed += $attributes['speed'];
    }
    if (isset($attributes['intelligence'])) {
        $this->intelligence += $attributes['intelligence'];
    }
    if (isset($attributes['luck'])) {
        $this->luck += $attributes['luck'];
    }
  }
  public function getAttributes() {
    return [
      'level' => $this->level,
      'hp' => $this->hp,
      'attack' => $this->attack,
      'defense' => $this->defense,
      'speed' => $this->speed,
      'intelligence' => $this->intelligence,
      'luck' => $this->luck,
    ];
  }
}

fscanf(STDIN, '%d %d', $numberOfHeroes, $numberOfEvents);
// var_dump($numberOfHeroes, $numberOfEvents);

$heros = [];
for ($i=1; $i<=$numberOfHeroes; $i+=1) {
  fscanf(STDIN, '%d %d %d %d %d %d %d'
    , $level, $hp, $attack, $defense, $speed, $intelligence, $luck);
  $heros[$i] = new Hero($level, $hp, $attack, $defense, $speed, $intelligence, $luck);
}

// var_dump($heros);

for ($i=0; $i<$numberOfEvents; $i+=1) {
  $input_line = fgets(STDIN);
  $input = explode(' ', $input_line);
  $heroNo = intval($input[0]);
  $event = trim($input[1]);

  switch ($event) {
    case 'levelup':
      $heros[$heroNo]->updateAttributes([
        'level' => 1,
        'hp' => intval($input[2]),
        'attack' => intval($input[3]),
        'defense' => intval($input[4]),
        'speed' => intval($input[5]),
        'intelligence' => intval($input[6]),
        'luck' => intval($input[7]),
      ]);
      break;
    case 'muscle_training':
      $heros[$heroNo]->updateAttributes([
        'hp' => intval($input[2]),
        'attack' => intval($input[3]),
      ]);
      break;
    case 'running':
      $heros[$heroNo]->updateAttributes([
        'defense' => intval($input[2]),
        'speed' => intval($input[3]),
      ]);
      break;
    case 'study':
      $heros[$heroNo]->updateAttributes([
        'intelligence' => intval($input[2]),
      ]);
      break;
    case 'pray':
      $heros[$heroNo]->updateAttributes([
        'luck' => intval($input[2]),
      ]);
  }
}

for ($i=1; $i<=$numberOfHeroes; $i+=1) {
  $attrs = $heros[$i]->getAttributes();
  $disp = $attrs['level'] . ' ';
  $disp .= $attrs['hp'] . ' ';
  $disp .= $attrs['attack'] . ' ';
  $disp .= $attrs['defense'] . ' ';
  $disp .= $attrs['speed'] . ' ';
  $disp .= $attrs['intelligence'] . ' ';
  $disp .= $attrs['luck'];

  echo $disp . PHP_EOL;
}


?>