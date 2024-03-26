<?php

class Q2 
{
    /**
     * ２匹のサルがトラブルを起こすかをチェックする関数
     * @param bool $aSmile 笑っていればtrue、そうでなければfalse
     * @param bool $bSmile 笑っていればtrue、そうでなければfalse
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