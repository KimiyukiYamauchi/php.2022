<?php

class Q7
{
    /**
     * 与えられた偶数長の文字列の前半部分の文字列を返す処理
     * 例：
     * 　firstHalf("WooHoo") → "Woo"
     * 　firstHalf("HelloThere") → "Hello"
     * 　firstHalf("abcdef") → "abc"
     * 
     * @param string $str 文字列
     * 
     * @return string　上記の処理を行った文字列
     * 
     */
    public function firstHalf(string $str) : string
    {
        $halfLength = strlen($str) / 2;
        return substr($str, 0, $halfLength);
    }
}