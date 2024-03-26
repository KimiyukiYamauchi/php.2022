<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q23
{
    /**
     * 引数として２つの文字列a、ｂが与えれる
     * 文字列aと文字列bを結合した文字列を返す関数
     * 但し、結合部分に同じ文字が現れる場合は文字の一つを消すため、
     * "abc"と"cat"は"abcat"とする
     * 例：
     * 　conCat("abc", "cat") → "abcat"
     * 　conCat("dog", "cat") → "dogcat"
     * 　conCat("abc", "") → "abc"
     * 
     * @param string $a
     * @param string $b
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function conCat(string $a, string $b) : string
    {
        return '-1';
    }
}