<?php

class Q16
{
    /**
     * int型の配列を2つ引数として与えられるので、その配列の最初の要素が1で
     * ある数を返す
     * 例：
     * 　start1([1, 2, 3], [1, 3]) → 2
     * 　start1([7, 2, 3], [1]) → 1
     * 　start1([1, 2], []) → 1
     *  
     * @param array int [] nums1
     * @param array int [] nums2
     * 
     * @return int 配列の最初の要素が1の数
     * 
     */
    public function start1(array $nums1, array $nums2) : int
    {
        $count = 0;
        if (count($nums1) > 0 and $nums1[0] == 1) {
            $count++;
        }
        if (count($nums2) > 0 and $nums2[0] == 1) {
            $count++;
        }
        return $count;
    }
}