<?php

class Q2
{
    /**
     * 文字列と非負の整数を受け取り、文字列の最初3文字を非負の整数回繰り返した文字列を返す
     * 但し、文字列は3文字より少ないことがある
     * 例：
     * 　frontTimes("Chocolate", 2) → "ChoCho"
     * 　frontTimes("Chocolate", 3) → "ChoChoCho"
     * 　frontTimes("Abc", 3) → "AbcAbcAbc"
     * 
     * @param bool $str 先頭3文字を繰り返す
     * @param bool $n 繰り返し回数
     * 
     * @return 文字列の最初3文字を非負の整数回繰り返した文字列
     * 
     */
    public function  frontTimes(string $str, int $n) : string
    {
        $front = substr($str, 0, 3);    // 文字列の最初の3文字（または3文字未満）を取得
        return str_repeat($front, $n);  // 最初の文字列を$n回繰り返す
    }
}