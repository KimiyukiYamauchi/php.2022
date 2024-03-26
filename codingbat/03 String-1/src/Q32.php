<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q32
{
    /**
     * 引数として与えられた文字列の先頭、２番目の文字が'x'であればそれを削除し、
     * 返す。そうでない場合は引数の文字をそのまま返す
     * 例：
     * 　withoutX2("xHi") → "Hi"
     * 　withoutX2("Hxi") → "Hi"
     * 　withoutX2("Hi") → "Hi"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     */
    public function withoutX2(string $str) : string
    {
        return '';
    }
}