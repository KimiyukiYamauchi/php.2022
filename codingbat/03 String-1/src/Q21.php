<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q21
{
    /**
     * 引数として与えられた文字列先頭の２文字を返す
     * 与えられた文字列の文字列長が２文字未満の場合は"@"で補って返す
     * 例：
     * 　atFirst("hello") → "he"
     * 　atFirst("hi") → "hi"
     * 　atFirst("h") → "h@"
     * 
     * @param string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function atFirst(string $str) : string
    {
        return '-1';
    }
}