<?php

class Q11
{
    /**
     * 引数(文字列)の先頭文字と末尾の文字を入れ替えた
     * 文字列を返す関数
     * 例：
     * 　frontBack("code") → "eodc"
     * 　frontBack("a") → "a"
     * 　frontBack("ab") → "ba"
     * 
     * @param string $str 対象の文字列
     * 
     * @return 対象のの先頭文字と末尾の文字を入れ替えた文字列を返す
     * 
     */
    public function frontBack(String $str) : string
    {

        $arr = str_split($str);         // 配列に変換
        $tmp = $arr[0];                 // 最初の要素を退避
        $arr[0] = $arr[count($arr)-1];  // 最初の要素の位置に最後の要素を格納
        $arr[count($arr)-1] = $tmp;     // 退避した最初要素を最後の要素位置に格納
        $ret = implode('', $arr);       // 文字列に変換

        return $ret;

    }
}