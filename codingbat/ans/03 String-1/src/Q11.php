<?php

class Q11
{
    /**
     * 引数で与えられた文字列を２文字分左ローテートシフトした文字列を返す
     * 先頭の２文字を文字列の末尾に移動する
     * 引数で与えられた文字列は２文字以上
     * 例：
     * 　left2("Hello") → "lloHe"
     * 　left2("java") → "vaja"
     * 　left2("Hi") → "Hi"
     * 
     * @param array string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function left2(string $str) : string
    {
        // 文字列の先頭２文字を取り出します
        $first_two_chars = substr($str, 0, 2);

        // 先頭２文字を取り除いた文字列を作成します
        $remaining_chars = substr($str, 2);

        // 先頭２文字を末尾に付けて新しい文字列を作成します
        $rotated_string = $remaining_chars . $first_two_chars;

        // 新しい文字列を返します
        return $rotated_string;
    }
}