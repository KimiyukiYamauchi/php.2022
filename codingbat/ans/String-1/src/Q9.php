<?php

class Q9
{
    /**
     * 引数として与えられて２つの文字列で、文字列長の短い文字列(short)で、
     * 文字列長の長い文字列(long)を囲んだ文字列を返す(short + long + short)。
     * ２つの文字列長が等しいことはない、但し、文字列長が0の場合がある
     * 例：
     * 　comboString("Hello", "hi") → "hiHellohi"
     * 　comboString("hi", "Hello") → "hiHellohi"
     * 　comboString("aaa", "b") → "baaab"
     * 
     * @param string $a 文字列
     * @param string $b 文字列
     * 
     * @return string 上記の条件で作られる文字列を返す
     * 
     */
    public function comboString(string $a, string $b) : string
    {
        if (strlen($a) > strlen($b)) {
            $long = $a;
            $short = $b;
        } else {
            $long = $b;
            $short = $a;
        }
        return $short . $long . $short;
    }
}