<?php

echo '3つの値を半角スペース区切りで入力して下さい => ';

[$a, $b, $c] = explode(" ", trim(fgets(STDIN)));

echo $a < $b? 
        ($a < $c? $a : $c) :
        ($b < $c? $b : $c);

// printf("%d, %d, %d ", $a, $b, $c);