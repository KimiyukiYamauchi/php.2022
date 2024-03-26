<?php

class Q3
{
    /**
     * 引数の文字列から'xx'を検索し、その数を返す。
     * 重なり合う文字列もカウントする
     * 例：
     * 　countXX("abcxx") → 1
     * 　countXX("xxx") → 2
     * 　countXX("xxxx") → 3
     * 
     * @param bool $str 検索対象の文字列
     * 
     * @return 検索対象の文字列から'xx'が検索されたらtrue、それ以外はfalse
     * 
     */
    public function  countXX(string $str) : int
    {
        $count = 0;
        for ($i = 0; $i < strlen($str) - 1; $i++) {
            if (substr($str, $i, 2) == "xx") { // 現在の位置と次の位置で "xx" をチェック
                $count++;
            }
        }
        return $count;
    }
}