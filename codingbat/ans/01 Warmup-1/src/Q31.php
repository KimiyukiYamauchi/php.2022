<?php

class Q31
{
    /**
     * 2つの引数(文字列と整数)を受け取り、文字列から整数の倍数番目の文字のみの
     * 文字列を返す。整数として3を受け取った場合、文字列の0,3,6,9...番目
     * の文字を結合した文字列を返す。引数の文字列は空文字ではない
     * 例：
     * 　　everyNth("Miracle", 2) → "Mrce"
     * 　　everyNth("abcdefg", 2) → "aceg"
     * 　　everyNth("abcdefg", 3) → "adg"
     * 
     * @param string $str 文字列
     * @param string $n 整数
     * 
     * @return 2つの引数(文字列と整数)を受け取り、文字列から整数の倍数番目の文字のみの
     * 　　　　文字列を返す。整数として3を受け取った場合、文字列の0,3,6,9...番目
     * 　　　　の文字を結合した文字列を返す。
     * 
     */
    public function everyNth(string $str, int $n) : string
    {
        $result = "";
        for ($i=0; $i<strlen($str); $i+=$n) {
            $result .= substr($str, $i, 1);
        }
        return $result;
    }
}