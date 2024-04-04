<?php

class Q8
{
    /**
     * 引数で与えられた要素数3のint型の配列の要素の最初と最後の要素の
     * 大きいほうの値で、他の要素を上書きした配列を返す
     * 例：
     * 　maxEnd3([1, 2, 3]) → [3, 3, 3]
     * 　maxEnd3([11, 5, 9]) → [11, 11, 11]
     * 　maxEnd3([2, 11, 3]) → [3, 3, 3]
     * 
     * @param int [] nums 要素数3のint型の配列
     * 
     * @return int []　上の処理を行った配列
     * 
     */
    public function maxEnd3(array $nums) : array
    {
        // 最初と最後の要素のうち大きい方の値を見つける
        $largerValue = max($nums[0], $nums[2]);

        // 大きい値で配列の要素を上書き
        return array_fill(0, 3, $largerValue);
    }
}