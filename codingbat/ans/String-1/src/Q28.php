<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q28
{
    /**
     * 引数として与えられた文字列の先頭２文字を三回コピーした文字列を返す関数
     * 引数の文字列の文字列長は任意。２文字に満たない場合はある分を３回コピーした
     * 文字列を返す
     * 例：
     * 　extraFront("Hello") → "HeHeHe"
     * 　extraFront("ab") → "ababab"
     * 　extraFront("H") → "HHH"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     * 
     */
    public function extraFront(string $str) : string
    {
        $prefix = substr($str, 0, 2);
        $result = $prefix . $prefix . $prefix;
        return $result;
    }
}