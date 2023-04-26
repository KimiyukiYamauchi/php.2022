<?php

class Q17
{
    /**
     * 引数として文字列(string型)とint型nが与えれれる
     * 文字列の先頭及び末尾からn文字をとしだしたものを結合した文字列を返す関数
     * 文字列はn以上
     * 例：
     * 　nTwice("Hello", 2) → "Helo"
     * 　nTwice("Chocolate", 3) → "Choate"
     * 　nTwice("Chocolate", 1) → "Ce"
     * 
     * @param array string $str
     * @param array int $int
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function nTwice(string $str, int $n) : string
    {
         $len = strlen($str);
        $start = substr($str, 0, $n);
        $end = substr($str, $len - $n);
        return $start . $end;
    }
}