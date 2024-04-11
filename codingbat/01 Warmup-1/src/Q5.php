<?php

class Q5 
{
    /**
     * 飼っているオウムのおしゃべりがトラブルになるかを返す関数
     * おしゃべりがうるさいオウムがいます。「$hour」引数は、0から23の
     * 範囲での現在の時刻を表します。オウムがおしゃべりしていて、時刻が
     * 7時より前または20時より後であれば、私たちは困ります。
     * 困っている場合は true を返します。
     * 
     * @param bool $talking オウムがおしゃべるしているときはtrue、そうでなければfalse
     * @param int $hour 時刻(0以上23以下)
     * 
     * @return $talkingがtrueで、$hourが7より小さいか20より大きければtrueを返す
     *         それ以外はfalse
     * 例：
     * 　parrotTrouble(true, 6) → true
     * 　parrotTrouble(true, 7) → false
     * 　parrotTrouble(false, 6) → false
     * 
     */
    public function parrotTrouble(bool $talking, int $hour) : bool
    {
        return false;
    }
}