<?php

class Q6
{
    /**
     * "Code"の様な空でない文字列が与えられたら、"CCoCodCode"を返す処理
     * 例：
     * 　stringSplosion("Code") → "CCoCodCode"
     * 　stringSplosion("abc") → "aababc"
     * 　stringSplosion("ab") → "aab"
     * 
     * @param bool $str 文字列
     * 
     * @return 上記の条件で作られた文字列を返す
     * 
     */
    public function stringSplosion(string $str) : string
    {
        $result = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $result .= substr($str, 0, $i+1); // i+1 文字目までの文字列を連結する
        }
        return $result;
    }
}