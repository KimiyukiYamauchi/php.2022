<?php

class Q13
{
    /**
     * 与えられた文字列(string型)のindexが0,1,4,5,8,9...の文字列を返す
     * 例えば、引数で与えられた文字列がkittens"なら"kien"を返す
     * 例：
     * 　altPairs("kitten") → "kien"
     * 　altPairs("Chocolate") → "Chole"
     * 　altPairs("CodingHorror") → "Congrr"
     * 
     * @param array string $str
     * 
     * @return 上記の処理を行った文字列を返す
     * 
     */
    public function altPairs(string $str) : string
    {
        // Initialize an empty result string
        $result = "";
        // Iterate over the string in steps of 4, adding characters at the specified indexes
        for ($i = 0; $i < strlen($str); $i += 4) {
            $result .= substr($str, $i, 2);
        }
        return $result;
    }
}