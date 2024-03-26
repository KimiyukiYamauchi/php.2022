<?php

class Q11
{
    /**
     * 与えられた2つの文字列(string型)で共通する2文字の文字列の個数を返す関数
     * 共通する文字列は文字位置も一致しなければいけない
     * 例えば"xxcaazz"と"xxbaaz"が与えられた場合、"xx"(文字位置0)、"aa"(文字位置3)、
     * "az"(文字位置4)が共通なので、3を返す
     * 例：
     * 　stringMatch("xxcaazz", "xxbaaz") → 3 ("xx", "aa", "az")
     * 　stringMatch("abc", "abc") → 2 ("ab", "bc")
     * 　stringMatch("abc", "axc") → 0
     * 
     * @param array string $a string $b
     * 
     * @return 上記の条件が成り立つ個数を返す
     * 
     */
    public function stringMatch(string $a, string $b) : int
    {
        return -1;
    }
}