<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q25
{
    /**
     * 引数として与えられた文字列が"red"、"blue"で始まっていたら
     * 文字列のその色の部分を返す、それ以外は空文字を返す関数
     * 例：
     * 　seeColor("redxx") → "red"
     * 　seeColor("xxred") → ""
     * 　seeColor("blueTimes") → "blue"
     * 
     * @param string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function seeColor(string $str) : string
    {
        return '-1';
    }
}