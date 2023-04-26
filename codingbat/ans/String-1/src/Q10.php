<?php

class Q10
{
    /**
     * 与えられた2つの文字列aとbの先頭1文字を除いた残りの部分を連結して
     * その結果を返します。
     * 例：
     * 　nonStart("Hello", "There") → "ellohere"
     * 　nonStart("java", "code") → "avaode"
     * 　nonStart("shotl", "java") → "hotlava"
     * 
     * @param string $a 文字列
     * @param string $b 文字列
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function nonStart(string $a, string $b) : string
    {
       return substr($a, 1) . substr($b, 1);
    }
}