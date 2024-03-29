<?php

class Q4 
{
    /**
     * 1つの引数(整数)を受け取り21との差を返す、正し引数が21より
     * 大きければ差の2倍を返す関数
     * 例：
     * 　diff21(19) → 2
     * 　diff21(10) → 11
     * 　diff21(21) → 0
     * 
     * @param int $a 整数
     * @param int $b 整数
     * 
     * @return 1つの引数(整数)を受け取り21との差を返す、正し引数が21より
     * 　　　　大きければ差の2倍を返す
     * 
     */
    public function diff21(int $n) : int
    {
      // if ($n > 21) {
      //   return ($n - 21) * 2;
      // } else {
      //   return 21 - $n;
      // }

      return $n > 21 ? ($n - 21) * 2 : 21 - $n;

    }

}