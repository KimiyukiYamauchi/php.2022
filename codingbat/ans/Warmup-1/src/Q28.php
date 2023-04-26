<?php

class Q28
{
    /**
     * 1つの引数(文字列)に文字'e'が1つまたは3つ含まれている場合はtrueを返す。
     * それ以外ははfalseを返す
     * 例：
     * 　　stringE("Hello") → true
     * 　　stringE("Heelle") → true
     * 　　stringE("Heelele") → false
     * 
     * @param int $str 文字列
     * 
     * @return 1つの引数(文字列)に文字'e'が1つまたは3つ含まれている場合はtrueを返す。
     * 　　　　それ以外ははfalseを返す
     * 
     */
    public function stringE(string $str)  : bool
    {
        $arr = str_split($str, 1);
        $count = 0;
        foreach ($arr as $c) {
            if ($c == 'e') {
                $count += 1;
            }
        }
        return $count == 1 || $count == 3;
    }
}