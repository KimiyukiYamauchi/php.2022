<?php

class Q10
{
    /**
     * 2つのいずれも要素数が3のint型の配列を与えられ、それぞれの配列の真ん中の
     * 値を要素とする配列を返す
     * その結果を返します。
     * 例：
     * 　middleWay([1, 2, 3], [4, 5, 6]) → [2, 5]
     * 　middleWay([7, 7, 7], [3, 8, 0]) → [7, 8]
     * 　middleWay([5, 2, 9], [1, 4, 5]) → [2, 4]
     * 
     * @param int [] $a int型の配列
     * @param int [] $b int型の配列
     * 
     * @return int [] 上記の処理で作成された配列
     * 
     */
    public function middleWay(array $a, array $b) : array
    {
        return [$a[1], $b[1]];
    }
}