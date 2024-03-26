<?php

class Q15
{
    /**
     * 与えられたint型の配列の要素に6が2つ続く、または6,7となる回数を返す
     * 例：
     * 　array667([6, 6, 2]) → 1
     * 　array667([6, 6, 2, 6]) → 1
     * 　array667([6, 7, 2, 6]) → 1
     * 
     * @param array $nums
     * 
     * @return 上記の条件に合致した回数を返す
     * 
     */
    public function array667(array $nums) : int
    {
        $count = 0;
        for ($i = 0; $i < count($nums)-1; $i++) {
            if ($nums[$i] == 6 && ($nums[$i+1] == 6 || $nums[$i+1] == 7)) {
                $count++;
            }
        }
        return $count;
    }
}