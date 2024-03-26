<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q29
{
    /**
     * 引数として与えられた文字列の先頭２文字を削除して返す関数
     * 但し、先頭１文字目が'a'、２文字目が'b'の場合は削除しない
     * 文字列長は任意。以外に難しい
     * 例：
     * 　deFront("Hello") → "llo"
     * 　deFront("java") → "va"
     * 　deFront("away") → "aay"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     * 
     */
    public function deFront(string $str) : string
    {
        if(strlen($str) < 2) { // 文字列長が2未満の場合は、そのまま返す
            return $str;
        } elseif($str[0] == 'a' && $str[1] == 'b') { // 先頭１文字目が'a'、２文字目が'b'の場合は、そのまま返す
            return $str;
        } elseif($str[0] == 'a') { // 先頭１文字目が'a'の場合は、先頭１文字を残して３文字目以降を返す
            return $str[0] . substr($str, 2);
        } elseif($str[1] == 'b') { // ２文字目が'b'の場合は、２文字目以降を返す
            return substr($str, 1);
        } else { // 上記以外の場合は、先頭２文字を削除して返す
            return substr($str, 2);
        }
    }
}