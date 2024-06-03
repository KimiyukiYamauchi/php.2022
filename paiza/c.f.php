<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $input = explode(' ', $input_line);
    $n = intval($input[0]);
    $k = intval($input[1]);

    $users = [];
    for ($i=0; $i<$n; $i+=1) {
      fscanf(STDIN, "%s %d %s %s", $nickname, $old, $birth, $state);
      $users[$i]['nickname'] = $nickname;
      $users[$i]['old'] = $old;
      $users[$i]['birth'] = $birth;
      $users[$i]['state'] = $state;
    }

    // var_dump($users);

    $changes = [];
    for ($i=0; $i<$k; $i+=1) {
      $input_line = fgets(STDIN);
      $input = explode(' ', $input_line);
      $changes[$i]['a'] = intval($input[0]);
      $changes[$i]['nn'] = trim($input[1]);
    }

    for ($i=0; $i<count($changes); $i+=1) {
      $users[$changes[$i]['a']-1]['nickname'] = $changes[$i]['nn'];
    }
  
    for ($i=0; $i<$n; $i+=1) {
      echo "{$users[$i]['nickname']} {$users[$i]['old']} " .
       "{$users[$i]['birth']} {$users[$i]['state']}" .PHP_EOL;
    }
?>