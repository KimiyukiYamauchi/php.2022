<?php

class Q18
{
    /**
     * 引数として文字列(string型)とint型でindexが与えれれる
     * 文字列のindexの位置からの２文字を返す関数
     * index位置から２文字取り出せない場合は先頭から２文字を取り出す
     * 文字列は2文字以上
     * 例：
     * 　twoChar("java", 0) → "ja"
     * 　twoChar("java", 2) → "va"
     * 　twoChar("java", 3) → "ja"
     * 
     * @param array string $str
     * @param array int $index
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function nTwice(string $str, int $index) : string
    {
        $len = strlen($str);
        if ($index + 2 > $len or $index < 0) {
            $index = 0;
        }
        return substr($str, $index, 2);
    }
}