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
        if($a == "") { // aが空文字列の場合、bをそのまま返す
            return $b;
        } elseif($b == "") { // bが空文字列の場合、aをそのまま返す
            return $a;
        } elseif(substr($a, -1) == substr($b, 0, 1)) { // aの末尾とbの先頭が同じ文字の場合
            return $a . substr($b, 1); // aの末尾とbの先頭の1文字を重複させないで結合
        } else { // 上記以外の場合、そのまま結合
            return $a . $b;
        }
    }
}