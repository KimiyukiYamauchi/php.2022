<?php

class Q10
{
    /**
     * 与えられたint型の配列に1,2,3の並びの要素があればtrue、
     * それ以外はfalseを返す関数
     * 例：
     * 　array123([1, 1, 2, 3, 1]) → true
     * 　array123([1, 1, 2, 4, 1]) → false
     * 　array123([1, 1, 2, 1, 2, 3]) → true
     * 
     * @param array $nums int型の配列
     * 
     * @return 上記の条件でbool値を返す
     * 
     */
    public function array123(array $nums) : bool
    {
        // Initialize variables to track last two numbers seen
        $prev_prev = null;
        $prev = null;
        foreach ($nums as $num) {
            // Check if we have seen the sequence 1, 2, 3
            if ($prev_prev == 1 && $prev == 2 && $num == 3) {
            return true;
            }
            // Update previous two numbers seen
            $prev_prev = $prev;
            $prev = $num;
        }
        // If we iterated through the entire array without finding the sequence, return false
        return false;
    }
}