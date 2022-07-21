<?php

class Q17
{
    /**
     * 2つの引数(整数)の一方が0より小さく、もう一方が100より大きいときtrueを返す
     * それ以外はfalseを返す関数
     * 例：
     * 　icyHot(120, -1) → true
     * 　icyHot(-1, 120) → true
     * 　icyHot(2, 120) → false
     * 
     * @param int $temp1 整数
     * @param int $temp2 整数
     * 
     * @return 2つの引数(整数)の一方が0より小さく、もう一方が100より大きいときtrue
     * 　　　　を返す。それ以外はfalseを返す
     * 
     */
    public function icyHot(int $temp1, int $temp2) : bool
    {
      // if ($temp1 < 0 && $temp2 > 100 || $temp1 > 100 && $temp2 < 0) {
      //   return true;
      // }
        
      // return false;

      return $temp1 < 0 and $temp2 > 100
              or $temp1 > 100 and $temp2 < 0;
    }
}