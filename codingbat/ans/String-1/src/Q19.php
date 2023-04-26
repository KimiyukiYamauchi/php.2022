<?php

class Q19
{
    /**
     * 引数として与えられた奇数長の文字列から中間の３文字を返す関数
     * 文字列は３文字以上
     * 例：
     * 　twoChar("java", 0) → "ja"
     * 　twoChar("java", 2) → "va"
     * 　twoChar("java", 3) → "ja"
     * 
     * @param array string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function twoChar(string $str) : string
    {
        $len = strlen($str);
        $mid = floor($len/2);
        return substr($str, $mid-1, 3);
    }
}