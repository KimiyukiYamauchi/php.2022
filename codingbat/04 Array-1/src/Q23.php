<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q23
{
    /**
     * 引数として任意の要素数のint型配列を与えられる
     * 配列の最初の要素か2つ分の要素からなる配列を返す
     * 配列の要素数が2に満たない場合はその分の要素の配列を返す
     * 例：
     * 　frontPiece([1, 2, 3]) → [1, 2]
     * 　frontPiece([1, 2]) → [1, 2]
     * 　frontPiece([1]) → [1]
     * 
     * @param int [] $nums
     * 
     * @return int [] 上記の処理結果のint型配列
     * 
     */
    public function frontPiece(array $nums) : array
    {
        return [];
    }
}