<?php

class Q5 
{
    /**
     * 飼っているオウムのおしゃべりがトラブルになるかを返す関数
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