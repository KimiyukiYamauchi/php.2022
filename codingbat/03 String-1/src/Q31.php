<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q31
{
    /**
     * 引数として与えられた文字列の先頭文字、末尾文字が'x'であればそれを
     * 削除した文字列を返す。そうでない場合は引数の文字をそのまま返す
     * 例：
     * 　withoutX("xHix") → "Hi"
     * 　withoutX("xHi") → "Hi"
     * 　withoutX("Hxix") → "Hxi"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     */
    public function withoutX(string $str) : string
    {
        return '-1';
    }
}