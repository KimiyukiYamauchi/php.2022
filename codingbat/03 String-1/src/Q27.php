<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q27
{
    /**
     * 引数として２つの文字列a, bが与えられ、これらを結合した文字列を返す
     * このときa, bの文字列の文字長が短いほうの長さに長いほうの長さを合わせる
     * 例えば"Hello"と"Hi"が与えられた場合は返却値は"loHi".となる 
     * 文字列a, bの文字列長は任意
     * 例：
     * 　minCat("Hello", "Hi") → "loHi"
     * 　minCat("Hello", "java") → "ellojava"
     * 　minCat("java", "Hello") → "javaello"
     * 
     * @param string $a
     * @param string $b
     * 
     * @return string 上記の処理によって作成される文字列
     * 
     */
    public function minCat(string $a, $b) : string
    {
        return '-1';
    }
}