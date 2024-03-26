<?php

class Q5
{
    /**
     * 引数の文字列から奇数番目の文字で作った文字列を返す
     * 例：
     * 　stringBits("Hello") → "Hlo"
     * 　stringBits("Hi") → "H"
     * 　stringBits("Heeololeo") → "Hello"
     * 
     * @param bool $str 文字列
     * 
     * @return 上記の条件で作られた文字列を返す
     * 
     */
    public function stringBits(string $str) : string
    {
         $result = "";
        for ($i = 0; $i < strlen($str); $i += 2) { // 2つおきに文字を取得
            $result .= $str[$i];
        }
        return $result;
    }
}