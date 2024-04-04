<?php

class Q15
{
    /**
     * 引数で要素数が3のint型の配列が与えられるので、要素が"2"に続いて"3"である場合
     * "3"の位置の値を"0"にし、その配列を返す
     * それ以外は引数でもらった配列をそのまま返す
     * 　fix23([1, 2, 3]) → [1, 2, 0]
     * 　fix23([2, 3, 5]) → [2, 0, 5]
     * 　fix23([1, 2, 1]) → [1, 2, 1]
     * 
     * @param int [] $nums
     * 
     * @return int [] $nums　上記の処理を行った配列
     * 
     */
    public function fix23(array $nums) : array
    {
        return [];
    }
}