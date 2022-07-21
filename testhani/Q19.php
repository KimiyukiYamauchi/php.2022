<?php

class Q19
{
    /**
     * 3つの引数(整数)の少なくとも1つが13以上、19以下の範囲のときtrueを返す
     * それ以外はfalseを返す関数
     * 例：
     * 　hasTeen(13, 20, 10) → true
     * 　hasTeen(20, 19, 10) → true
     * 　hasTeen(20, 10, 13) → true
     * 
     * @param int $a 整数
     * @param int $b 整数
     * @param int $c 整数
     * 
     * @return 3つの引数(整数)の少なくとも1つが13以上、19以下の範囲のときtrueを返す
     * 　　　　それ以外はfalseを返す関数
     * 
     */
    public function hasTeen(int $a, int $b, int $c) : bool
    {
      // $ret = false;

      // if ($a >= 13 && $a <= 19
      //     || $b >= 13 && $b <= 19
      //     || $c >= 13 && $c <= 19) {
      //   $ret = true;
      // }

      // return $ret;

      return $a >= 13 && $a <= 19
              || $b >= 13 && $b <= 19
              || $c >= 13 && $c <= 19;
              
    }
}