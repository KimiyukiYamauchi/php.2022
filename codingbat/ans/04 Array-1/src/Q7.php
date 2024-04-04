<?php

class Q7
{
    /**
     * 引数で与えられた要素数3のint型の配列の要素を
     * 逆順にした配列を返す
     * 例：
     * 　reverse3([1, 2, 3]) → [3, 2, 1]
     * 　reverse3([5, 11, 9]) → [9, 11, 5]
     * 　reverse3([7, 0, 0]) → [0, 0, 7]
     * 
     * @param int [] nums 要素数3のint型の配列
     * 
     * @return int []　配列の要素を逆順にした配列
     * 
     */
    public function reverse3(array $nums) : array
    {
        return array_reverse($nums);
    }
}