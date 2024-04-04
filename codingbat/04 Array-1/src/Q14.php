<?php

class Q14
{
    /**
     * 引数で与えられたint型の配列の要素数の2倍のint型配列を返す
     * 返す配列の要素は最後の要素のみ引数で与えられた配列の最後の要素とする
     * それ以外は0とする
     * 引数で与えられる配列の要素数は1以上
     * 例：
     * 　makeLast([4, 5, 6]) → [0, 0, 0, 0, 0, 6]
     * 　makeLast([1, 2]) → [0, 0, 0, 2]
     * 　makeLast([3]) → [0, 3]
     * 
     * @param array int [] nums int型の配列
     * 
     * @return 上記の処理で生成されたint型の配列
     * 
     */
    public function makeLast(array $nums) : array
    {
        return [];
    }
}