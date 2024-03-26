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
        return false;
    }
}