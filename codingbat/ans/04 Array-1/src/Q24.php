<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q24
{
    /**
     * 配列の中で、1の直後に3が続く場合を「不運な1」と呼びます。
     * 与えられた配列の最初の2つの位置または最後の2つの位置に不運な1
     * が含まれている場合、trueを返します。
     * それ以外はfalseを返す
     * 例：
     * 　unlucky1([1, 3, 4, 5]) → true
     * 　unlucky1([2, 1, 3, 4, 5]) → true
     * 　unlucky1([1, 1, 1]) → false
     * 
     * @param array nums int型の配列
     * 
     * @return bool 配列に「不運な1」があればtrueを返す
     * 　　　　　　 それ以外はfalse
     * 
     */
    public function unlucky1(array $nums) : bool
    {
        $len = count($nums);
        if ($len < 2) {
            return false;
        } else if ($len == 2) {
            return $nums[0] == 1 and $nums[1] == 3;
        } else {
            return $nums[0] == 1 and $nums[1] == 3 or
                    $nums[1] == 1 and $nums[2] == 3 or
                    $nums[$len-2] == 1 and $nums[$len-1] == 3;
        }
        return false;
    }
}