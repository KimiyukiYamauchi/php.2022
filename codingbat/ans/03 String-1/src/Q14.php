<?php

class Q14
{
    /**
     * 与えられた文字列の先頭と末尾の文字を除いた文字列を返す
     * 文字長が２文字未満の場合は空文字を返す
     * 例：
     * 　withouEnd2("Hello") → "ell"
     * 　withouEnd2("abc") → "b"
     * 　withouEnd2("ab") → ""
     * 
     * @param array string $str
     * 
     * @return 上記の処理を行った文字列を返す
     * 
     */
    public function withouEnd2(string $str) : string
    {
        if (strlen($str) <= 2) {
            // 文字列が2文字以下の場合は空文字を返す
            return "";
        } else {
            // 先頭と末尾の文字を除いた文字列を返す
            return substr($str, 1, -1);
        }
    }
}