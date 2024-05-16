<?php

class Q2 
{
    /**
     * ２匹のサルがトラブルを起こすかをチェックする関数
     * 2匹のサル、a と b がおり、パラメーター $aSmile と $bSmile は
     * それぞれが笑っているかどうかを示します。両方が笑っている場合、
     * またはどちらも笑っていない場合、私たちは困ります。
     * 困っている場合は true を返します。
     * 
     * @param bool $aSmile aのサルが笑っていればtrue、そうでなければfalse
     * @param bool $bSmile bのサルが笑っていればtrue、そうでなければfalse
     * 
     * @return トラブルを起こす場合はtrue、そうでなければfalse
     * 
     * ２匹のサルが両方とも笑っているか、両方とも笑っていなければトラブルを起こす
     * 例：
     * 　monkeyTrouble(true, true) → true
     * 　monkeyTrouble(false, false) → true
     * 　monkeyTrouble(true, false) → false
     * 
     */
    public function monkeyTrouble(bool $aSmile, bool $bSmile) : bool
    {
        return false;
    }
}