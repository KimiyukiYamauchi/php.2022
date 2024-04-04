<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q20
{
    /**
     * 引数としてint型の配列が与えられ、最初の要素と最後の要素を入れ替えた
     * 配列を返す
     * 引数で与えられる配列の要素数は1以上
     * 例：
     * 　swapEnds([1, 2, 3, 4]) → [4, 2, 3, 1]
     * 　swapEnds([1, 2, 3]) → [3, 2, 1]
     * 　swapEnds([8, 6, 7, 9, 5]) → [5, 6, 7, 9, 8]
     * 
     * @param int [] nums
     * 
     * @return int [] nums 上記の処理を行ったint型の配列
     * 
     */
    public function swapEnds(array $nums) : array
    {
        $tmp = $nums[0];
        $nums[0] = $nums[count($nums) - 1];
        $nums[count($nums) - 1] = $tmp;
        return $nums;
    }
}