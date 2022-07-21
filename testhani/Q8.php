<?php

class Q8
{
    /**
     * 受け取った引数で以下の条件が成り立つならtrueを返す
     * それ以外はfalseを返す
     * 条件：
     * 　第3引数の$negativeがfalseなら第1、第2引数のいずれかが正の数で、もう一方が負の数
     * 　第3引数の$negativeがtrueなら第1、第2引数のどちらも負の数
     * 例：
     * 　posNeg(1, -1, false) → true
     * 　posNeg(-1, 1, false) → true
     * 　posNeg(-4, -5, true) → true
     * 
     * @param int $a 整数
     * @param int $b 整数
     * @param bool $negative 論理値(trueまたはfalse)
     * 
     * @return 条件が成り立つならtrueを返す
     *         それ以外はfalse
     * 
     */
    public function posNeg(int $a, int $b, bool $negative) : bool
    {

      $ret = false;
      if (!$negative) {
        if ($a * $b < 0 ) {
          $ret = true;
        }
      } else {
        if ($a < 0 && $b <0) {
          $ret = true;
        }
      }
      return $ret;
    }
}