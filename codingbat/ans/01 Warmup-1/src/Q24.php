<?php

class Q24
{
    /**
     * 3つの引数(整数)の最大値を返す。
     * 例：
     * 　intMax(1, 2, 3) → 3
     * 　intMax(1, 3, 2) → 3
     * 　intMax(3, 2, 1) → 3
     * 
     * @param int $a 整数
     * @param int $b 整数
     * @param int $c 整数
     * 
     * @return 3つの引数(整数)の最大値
     * 
     */
    public function intMax(int $a, int $b, int $c) : int
    {
      // $m = max($a, $b, $c);
      // return $m;

      return max($a, $b, $c);
    }
}