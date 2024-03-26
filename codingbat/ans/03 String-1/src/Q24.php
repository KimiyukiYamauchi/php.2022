<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q24
{
    /**
     * 引数として任意の文字列長の文字列を与えられる
     * 文字列長が２文字以上の場合は末尾の２文字を入れ替えてそれを
     * 返す関数
     * "coding"が与えられた場合、"codign"を返す
     * 例：
     * 　lastTwo("coding") → "codign"
     * 　lastTwo("cat") → "cta"
     * 　lastTwo("ab") → "ba"
     * 
     * @param string $str
     * 
     * @return string 上記の処理を行った文字列を返す
     * 
     */
    public function lastTwo(string $str) : string
    {
        $len = strlen($str);
        if ($len < 2) {
            return $str;
        }
        return substr($str, 0, $len - 2) . $str[$len - 1] . $str[$len - 2];
    }
}