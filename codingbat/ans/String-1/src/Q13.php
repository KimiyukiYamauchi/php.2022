<?php

class Q13
{
    /**
     * 与えられた文字列の先頭からまたは末尾から1文字を返す
     * 与えられた文字列は１文字以上
     * 例：
     * 　theEnd("Hello", true) → "H"
     * 　theEnd("Hello", false) → "o"
     * 　theEnd("oh", true) → "o"
     * 
     * @param array string $str 文字列
     * @param array bool $front
     *                      true - 先頭から1文字返す
     *                      false - 末尾から1文字返す
     * 
     * @return 先頭からまたは末尾から1文字を返す
     * 
     */
    public function theEnd(string $str, bool $front) : string
    {
        if ($front) {
            // 文字列の先頭から1文字を返す
            return substr($str, 0, 1);
        } else {
            // 文字列の末尾から1文字を返す
            return substr($str, -1);
        }
    }
}