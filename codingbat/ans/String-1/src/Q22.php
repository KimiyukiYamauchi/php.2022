<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q22
{
    /**
     * 引数として２つの文字列a、ｂが与えれる
     * 文字列aの先頭文字と文字列bの末尾の文字を結合した文字列を返す関数
     * 文字列a、bが空文字の場合は"@"を代わりに使用する
     * 例：
     * 　lastChars("last", "chars") → "ls"
     * 　lastChars("yo", "java") → "ya"
     * 　lastChars("hi", "") → "h@"
     * 
     * @param string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function lastChars(string $a, string $b) : string
    {
        // 文字列aが空文字列の場合は"@"を代わりに使用する
        if ($a == "") {
            $a = "@";
        }
        // 文字列bが空文字列の場合は"@"を代わりに使用する
        if ($b == "") {
            $b = "@";
        }
        // 文字列aの先頭文字と文字列bの末尾の文字を結合する
        return substr($a, 0, 1) . substr($b, -1);
    }
}