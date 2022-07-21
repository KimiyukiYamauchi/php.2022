<?php

class Q14
{
    /**
     * 引数(整数)が3の倍数または5の倍数ならtrue、それ以外はfalseを返す関数
     * 例：
     * 　or35(3) → true
     * 　or35(10) → true
     * 　or35(8) → false
     * 
     * @param int $n 整数
     * 
     * @return 引数(整数)が3または5の倍数ならtrue、それ以外はfalseを返す
     * 
     */
    public function or35(int $n) : bool
    {
      // $ret = false;
      // if ($n%3 == 0 || $n%5 == 0) {
      //   $ret = true;
      // }
      // return $ret;

      return $n%3 == 0 || $n%5 == 0;

    }
}