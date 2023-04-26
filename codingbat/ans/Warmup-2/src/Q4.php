<?php

class Q4
{
    /**
     * 引数の文字列で、最初に見つかった文字'x'に続き次の文字も'x'の場合、
     * trueを返す。それ以外はfalse
     * 例：
     * 　doubleX("axxbb") → true
     * 　doubleX("axaxax") → false
     * 　doubleX("xxxxx") → true
     * 
     * @param bool $str 検索対象の文字列
     * 
     * @return 検索対象の文字列に上記の条件が成り立つ文字列があればtrue、
     * 　　　　それ以外はfalseを返す
     * 
     */
    public function  doubleX(string $str) : bool
    {
        $i = strpos($str, "x"); // 文字列内で最初に "x" が出現する位置を検索
        if ($i === false) { // "x" が見つからなかった場合は false を返す
            return false;
        } elseif ($i == strlen($str)-1) { // "x" が文字列の最後の文字だった場合は、次に "x" が続かないため false を返す
            return false;
        } else { // "x" の次の文字が "x" かどうかをチェックする
            return $str[$i+1] == "x";
        }
    }
}