<?php

class Q12
{
    /**
     * 引数で与えられた文字列を２文字分右ローテートシフトした文字列を返す
     * 末尾の２文字を文字列の先頭に移動する
     * 引数で与えられた文字列は２文字以上

     * 例：
     * 　right2("Hello") → "loHel"
     * 　right2("java") → "vaja"
     * 　right2("Hi") → "Hi"
     * 
     * @param string $str 文字列
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function right2(string $str) : string
    {
        return substr($str, -2) . substr($str, 0, -2);
    }
}