<?php

class Q8
{
    /**
     * 与えられたint型の配列で、要素が9の数を返す関数
     * 例：
     * 　arrayCount9([1, 2, 9]) → 1
     * 　arrayCount9([1, 9, 9]) → 2
     * 　arrayCount9([1, 9, 9]) → 2
     * 
     * @param array $nums int型の配列
     * 
     * @return 上記の条件での数を返す
     * 
     */
    public function arrayCount9(array $nums) : int
    {
        $count = 0;
        foreach ($nums as $num) {
            if ($num == 9) {
                $count++;
            }
        }
        return $count;
    }
}