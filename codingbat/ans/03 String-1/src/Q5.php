<?php

class Q5
{
    /**
     * 引数で与えられた文字列の後ろ２文字を３回繰り返した文字列を返す
     * 与えられる文字列は２文字以上
     * 例：
     * 　extraEnd("Hello") → "lololo"
     * 　extraEnd("ab") → "ababab"
     * 　extraEnd("Hi") → "HiHiHi"
     * 
     * @param string $str 文字列
     * 
     * @return string 上記の条件で作られた文字列を返す
     * 
     */
    public function extraEnd(string $str) : string
    {
        return substr($str, -2) . substr($str, -2) . substr($str, -2);
    }
}