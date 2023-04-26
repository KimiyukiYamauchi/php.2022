<?php

class Q16
{
    /**
     * 与えられた文字列の末尾が"ly"であればtrueを返す
     * それ以外はfalseを返す関数
     * 例：
     * 　endsLy("oddly") → true
     * 　endsLy("y") → false
     * 　endsLy("oddy") → false
     * 
     * @param array string $str
     * 
     * @return 上記の条件に従ってbool値(trueまたはfalse)を返す
     * 
     */
    public function endsLy(string $str) : bool
    {
        return substr($str, -2) === "ly";
    }
}