<?php

class Q1 
{
    /**
     * 遅起きしてもよいかを返す関数
     * 例：
     * 　sleepIn(false, false) → true
     * 　sleepIn(true, false) → false
     * 　sleepIn(false, true) → true
     * 
     * @param bool $weekday 平日であればtrue、土日はfalse
     * @param bool $vacation 祝日はtrue、そうでなければfalse
     * 
     * @return 遅起きしてもよければtrue、そうでなければfalse
     * 
     * $weekdayがfalseまたは$vacationがtrueなら遅起きしてよい
     */
    public function sleep_in(bool $weekday, bool $vacation) : bool
    {
        return false;
    }
}