<?php

class Q10
{
    /**
     * 第1引数(文字列)から第2引数(整数)の文字位置の文字を削除した
     * 文字列を返す関数
     * 例：
     * 　missingChar("kitten", 1) → "ktten"
     * 　missingChar("kitten", 0) → "itten"
     * 　missingChar("kitten", 4) → "kittn"
     * 
     * @param string $str 対象の文字列
     * @param string $n  削除位置(0からstrlen($str)-1の範囲)
     * 
     * @return 対象の文字列から削除位置の文字を削除した文字列を返す
     * 
     */
    public function missingChar(string $str, int $n) : string
    {
        // $front = substr($str, 0, $n);  // 削除位置の前までの部分文字列
        // $end = substr($str, $n+1);     // 削除位置の次からの部分文字列
        // return $front . $end;  // 2つを結合して返す

        $arr = str_split($str, 1);  // いったん配列に変換
        unset($arr[$n]);            // 配列の要素の削除
        $ret = implode('', $arr);   // 配列を文字列に戻す

        return $ret;

    }
}