<?php

class Q9
{
    /**
     * 引数としてint型の配列が与えられたとき、その最初の2つの要素の合計を
     * 返す関数。要素数が0の場合は0を返す
     * 例：
     * 　sum2([1, 2, 3]) → 3
     * 　sum2([1, 1]) → 2
     * 　sum2([1, 1, 1, 1]) → 2
     * 
     * @param int [] $nums int型の配列
     * 
     * @return int 最初の2つの要素の合計
     * 
     */
    public function sum2(array $nums) : int
    {
        return array_sum(array_slice($nums, 0 ,2));
    }
}