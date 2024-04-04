<?php

class Q12
{
    /**
     * 引数で与えられた要素数2のint型の配列に2または3が含まれている場合trueを返す
     * それ以外はfalseを返す

     * 例：
     * 　has23([2, 5]) → true
     * 　has23([4, 3]) → true
     * 　has23([4, 5]) → false
     * 
     * @param int [] $nums int型の配列
     * 
     * @return bool true or false
     * 
     */
    public function has23(array $nums) : bool
    {
        return in_array(2, $nums) or in_array(3, $nums);
    }
}