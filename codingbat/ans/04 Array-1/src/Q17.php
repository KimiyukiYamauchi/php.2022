<?php

class Q17
{
    /**
     * 要素数2のint型の配列を2つ与えられる
     * 要素の合計の大きいほうの配列を返す
     * 例：
     * 　biggerTwo([1, 2], [3, 4]) → [3, 4]
     * 　biggerTwo([3, 4], [1, 2]) → [3, 4]
     * 　biggerTwo([1, 1], [1, 2]) → [1, 2]
     * 
     * @param int [] nums1
     * @param int [] nums1
     * 
     * @return int [] 要素の合計の大きいほうの配列を返す
     * 
     */
    public function biggerTwo(array $nums1, array $nums2) : array
    {
        if (array_sum($nums1) >= array_sum($nums2)) {
            return $nums1;
        } else {
            return $nums2;
        }
    }
}