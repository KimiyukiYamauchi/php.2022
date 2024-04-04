<?php

class Q2
{
    /**
     * 引数として整数の配列を受け取り、配列の要素数が1異常でかつ、
     * 要素の最初と最後が等しいならtrueを返す
     * それ以外はfalseを返す
     * 例：
     * 　sameFirstLast([1, 2, 3]) → false
     * 　sameFirstLast([1, 2, 3, 1]) → true
     * 　sameFirstLast([1, 2, 1]) → true
     * 
     * @param 整数型の配列
     * 
     * @return true or false
     * 
     */
    public function sameFirstLast(array $nums) : bool
    {
        if (count($nums) == 1) {
            return true;
        } else {
            return $nums[0] == $nums[count($nums)-1];
        }
    }
}