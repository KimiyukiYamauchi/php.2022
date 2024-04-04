<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q25
{
    /**
     * 2つの整数配列、$a と $b が与えられた場合、a の要素に続いて 
     * b の要素をできるだけ含む、長さ 2 の新しい配列を返します。
     * 配列の長さは任意で、0であることもありますが、2つの配列の間には
     * 2つ以上の要素が利用可能です。
     * 例：
     * 　make2([4, 5], [1, 2, 3]) → [4, 5]
     * 　make2([4], [1, 2, 3]) → [4, 1]
     * 　make2([], [1, 2]) → [1, 2]
     * 
     * @param string array $a 整数配列
     * @param string array $b 整数配列
     * 
     * @return string array 上記の処理を行って作成された整数配列
     * 
     */
    public function make2(array $a, array $b) : array
    {
        return [];
    }
}