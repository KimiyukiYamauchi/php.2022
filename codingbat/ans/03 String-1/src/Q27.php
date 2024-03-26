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
        $a_len = strlen($a);
        $b_len = strlen($b);
        
        // 短いほうの長さに長いほうの文字列を切り詰める
        if ($a_len > $b_len) {
            $a = substr($a, $a_len - $b_len);
        } else if ($b_len > $a_len) {
            $b = substr($b, $b_len - $a_len);
        }
        
        // 結合して返す
        return $a . $b;
    }
}