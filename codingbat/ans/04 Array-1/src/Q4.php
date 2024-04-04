<?php

class Q4
{
    /**
     * この関数では、2つのint型の配列を受け取り、2つの配列の最初または最後の要素が
     * 等しい場合trueを返す。
     * それ以外はfalseを返す
     * ２つの配列は1以上の要素を持つ
     * 例：
     * 　commonEnd([1, 2, 3], [7, 3]) → true
     * 　commonEnd([1, 2, 3], [7, 3, 2]) → false
     * 　commonEnd([1, 2, 3], [1, 3]) → true
     * 
     * @param int [] $a int型の配列
     * @param int [] $b int型の配列
     * 
     * @return bool true or false
     * 
     */
    public function commonEnd(array $a, array $b) : bool
    {
        return $a[0] == $b[0] or $a[count($a)-1] == $b[count($b)-1];
    }
}