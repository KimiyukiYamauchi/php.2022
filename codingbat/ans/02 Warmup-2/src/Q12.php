<?php

class Q12
{
    /**
     * 与えられた文字列(string型)の先頭と末尾以外の'x'を削除した文字列を返す関数
     * 例：
     * 　stringX("xxHxix") → "xHix"
     * 　stringX("abxxxcd") → "abcd"
     * 　stringX("xabxxxcdx") → "xabcdx"
     * 
     * @param array string $str
     * 
     * @return 上記の処理を行った文字列を返す
     * 
     */
    public function stringX(string $str) : string
    {
        // 文字列の長さが２以下の場合はそのまま返す
        if (strlen($str) <= 2) {
            return $str;
        }
        // Otherwise, exclude all "x" characters except those at the start and end
        else {
            $result = $str[0];
            for ($i = 1; $i < strlen($str)-1; $i++) {
            if ($str[$i] != 'x') {
                $result .= $str[$i];
            }
            }
            $result .= $str[strlen($str)-1];
            return $result;
        }
    }
}