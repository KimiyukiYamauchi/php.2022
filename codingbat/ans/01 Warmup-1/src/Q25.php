<?php

class Q25
{
    /**
     * 2つの引数(整数)のうち10に近いほうを返す、2つの引数(整数)と10の距離が等しい場合は0を返す。
     * 例：
     * 　　close10(8, 13) → 8
     * 　　close10(13, 8) → 8
     * 　　close10(13, 7) → 0
     * 
     * @param int $a 整数
     * @param int $b 整数
     * 
     * @return 2つの引数(整数)のうち10に近いほうを返す、2つの引数(整数)と
     * 　　　　10の距離が等しい場合は0を返す。
     * 
     */
    public function close10(int $a, int $b) : int
    {
        // if (abs($a - 10) < abs($b - 10)) {
        //   return $a;
        // } elseif ((abs($a -10) > abs($b -10) ))) {
        //   return $b;
        // }

        // return 0;

        return abs($a -10) < abs($b -10) ?
                $a : (abs($a -10) > abs($b -10)  ? $b : 0);
    }
}