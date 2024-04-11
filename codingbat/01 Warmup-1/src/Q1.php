<?php

class Q1 
{
    /**
     * 引数の $weekday は、平日であれば true で、パラメーターの $vacation は、
     * 休暇中であれば true です。平日ではないか、休暇中であれば寝坊します。
     * 寝坊する場合は true を返します。
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