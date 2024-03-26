<?php

class Q26
{
    /**
     * 2つの引数(整数)がともに、30以上40以下、または40以上50以下にあるときtrueを返す。
     * それ以外はfalseを返す
     * 例：
     * 　　in3050(30, 31) → true
     * 　　in3050(30, 41) → false
     * 　　in3050(40, 50) → true
     * 
     * @param int $a 整数
     * @param int $b 整数
     * 
     * @return つの引数(整数)ともに、30以上40以下、または40以上50以下に
     * 　　　　あるときtrueを返す。それ以外はfalseを返す
     * 
     */
    public function in3050(int $a, int $b)  : bool
    {
        if ($a >= 30 && $a <= 40 && $b >= 30 && $b <= 40) {
            return true;
        } else if ($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) {
            return true;
        }
        return false;
    }
}