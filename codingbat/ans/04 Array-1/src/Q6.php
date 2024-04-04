<?php

class Q6
{
    /**
     * 引数で与えられた要素数3のint型の配列の要素を１要素分
     * 左ローテートシフトした結果の配列を返す
     * 例：
     * 　rotateLeft3([1, 2, 3]) → [2, 3, 1]
     * 　rotateLeft3([5, 11, 9]) → [11, 9, 5]
     * 　rotateLeft3([7, 0, 0]) → [0, 0, 7]
     * 
     * @param int [] $nums 要素数3のint型の配列
     * 
     * @return int [] １要素分左ローテートシフトした配列
     * 
     */
    public function rotateLeft3(array $nums) : array
    {
        [$a, $b, $c] = $nums;
        return [$b, $c, $a];
    }
}