<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q29
{
    /**
     * 引数として与えられた文字列の先頭２文字を削除して返す関数
     * 但し、先頭１文字目が'a'、２文字目が'b'の場合は削除しない
     * 文字列長は任意。以外に難しい
     * 例：
     * 　deFront("Hello") → "llo"
     * 　deFront("java") → "va"
     * 　deFront("away") → "aay"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     * 
     */
    public function deFront(string $str) : string
    {
        return '-1';
    }
}