<?php

class Q20
{
    /**
     * 2つの引数(整数)のどちらか一方が13以上、19以下の範囲のときtrueを返す
     * それ以外はfalseを返す関数
     * 例：
     * 　loneTeen(13, 99) → true
     * 　loneTeen(21, 19) → true
     * 　loneTeen(13, 13) → false
     * 
     * @param int $a 整数
     * @param int $b 整数
     * 
     * @return 2つの引数(整数)のどちらか一方が13以上、19以下の範囲のときtrueを返す
     * 　　　　それ以外はfalseを返す関数
     * 
     */
    public function loneTeen(int $a, int $b) : bool
    {
      // $ret = false;
      // if (($a >= 13 && $a <= 19) xor ($b >= 13 && $b <= 19)) {
      //   $ret = true;
      // }
        
      // return $ret;

      return ($a >= 13 && $a <= 19) 
              xor ($b >= 13 && $b <= 19);
    }
}