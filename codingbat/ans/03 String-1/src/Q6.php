<?php

class Q6
{
    /**
     * 引数で与えられた文字列の最初の２文字を返す。文字列が２文字に満たない場合は
     * 与えられた文字列をそのまま返す
     * 例：
     * 　firstTwo("Hello") → "He"
     * 　firstTwo("abcdefg") → "ab"
     * 　firstTwo("ab") → "ab"
     * 
     * @param string $str 文字列
     * 
     * @return string 上記の条件で作られた文字列を返す
     * 
     */
    public function firstTwo(string $str) : string
    {
        if (strlen($str) < 2) {
            return $str;
        }
        return substr($str, 0, 2);
    }
}