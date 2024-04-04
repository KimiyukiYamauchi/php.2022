<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q26
{
    /**
     * 任意の長さの2つの整数配列、$a と $b が与えられた場合、
     * 各配列の最初の要素で新しい配列を返します。
     * いずれかの配列の長さが0の場合、その配列は無視します。
     * 例：
     * 　front11([1, 2, 3], [7, 9, 8]) → [1, 7]
     * 　front11([1], [2]) → [1, 2]
     * 　front11([1, 7], []) → [1]
     * 
     * @param array $a 整数配列
     * @param array $b 整数配列
     * 
     * @return array 上記の処理で作成された整数配列
     * 
     */
    public function front11(array $a, array $b) : array
    {
       return [];
    }
}