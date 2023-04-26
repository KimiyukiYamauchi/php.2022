<?php

class Q6
{
    /**
     * 2つの引数(整数)を受け取り以下の条件が成り立つならtrueを返す
     * それ以外はfalseを返す
     * 条件：
     * 　2つの引き数の少なくともどちらかが10
     * 　2つの引き数の合計が10
     * 例：
     * 　makes10(9, 10) → true
     * 　makes10(9, 9) → false
     * 　makes10(1, 9) → true
     * 
     * @param int $a 整数
     * @param int $b 整数
     * 
     * @return 条件が成り立つならtrueを返す
     *         それ以外はfalse
     * 
     */
    public function makes10(int $a, int $b) : bool
    {
      $ret = false;
      if ( $a == 10 || $b == 10) {
        $ret = true;
      } elseif ($a+$b == 10) {
        $ret = true;
      } 
      return $ret;
    }
}