<?php

class Q1 
{
    /**
     * 遅起きしてもよいかを返す関数
     *  遅起きしてもよいならtrueを返す
     *  遅起きできないならfalseを返す
     * 
     * @param bool $weekday 平日であればtrue、土日はfalse
     * @param bool $vacation 祝日はtrue、そうでなければfalse
     * $weekdayがfalseまたは$vacationがtrueなら遅起きしてよい
     * 
     * @return 遅起きしてもよければtrue、そうでなければfalse
     * 
     * 
     * 例：
     * 　sleep_in(false, false) → true
     * 　sleep_in(true, false) → false
     * 　sleep_in(false, true) → true
     */
    public function sleep_in(bool $weekday, bool $vacation) : bool
    {
        return false;
    }
}