<?php

class Q14
{
    /**
     * 与えられた文字列(string型)から"yak"を削除した文字列を返す
     * 例：
     * 　stringYak("yakpak") → "pak"
     * 　stringYak("pakyak") → "pak"
     * 　stringYak("yak123ya") → "123ya"
     * 
     * @param array string $str
     * 
     * @return 上記の処理を行った文字列を返す
     * 
     */
    public function stringYak(string $str) : string
    {
        $result = "";
        $i = 0;
        while ($i < strlen($str)) {
            if ($i+2 < strlen($str) && substr($str, $i, 3) == "yak") {
                $i += 3;
            } else {
                $result .= $str[$i];
                $i += 1;
            }
        }
        return $result;
    }
}