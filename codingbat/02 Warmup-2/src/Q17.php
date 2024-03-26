<?php

class Q17
{
    /**
     * 与えられたint型の配列2,7,1のパターンがあればtrueを返す関数
     * 最初が1ならそれに続く2番目の要素は最初の要素+5、それに続く
     * 3番目の要素は最初の要素-1となるもの
     * 加えて3番目の要素は正しい値の±2の範囲であればよい
     * それ以外はfalseを返す関数
     * 例：
     * 　has271([1, 2, 7, 1]) → true
     * 　has271([1, 2, 8, 1]) → false
     * 　has271([2, 7, 1]) → true
     * 
     * @param array array $nums
     * 
     * @return 上記の条件に従ってbool値(trueまたはfalse)を返す
     * 
     */
    public function has271(array $nums) : bool
    {
        $ret = false;
        return $ret;
    }
}