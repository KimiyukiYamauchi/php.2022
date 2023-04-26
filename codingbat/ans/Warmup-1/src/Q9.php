<?php

class Q9
{
    /**
     * 受け取った引数(文字列)の前に"not "を付加して返す。
     * 但し、すでにnotから文字列が始まっている場合は
     * 受け取った文字列をそのまま返す関数
     * 例：
     * 　notString("candy") → "not candy"
     * 　notString("x") → "not x"
     * 　notString("not bad") → "not bad"
     * 
     * @param string $str
     * 
     * @return notから始まる文字列を返す
     * 
     */
    public function notString(string $str) : string
    {
        // if (str_starts_with($str, 'not')) {
        //   return $str;
        // } else {
        //   return 'not ' . $str;
        // }

        // if (strpos($str, 'not') === 0) {
        //   return $str;
        // } else {
        //   return 'not ' . $str;
        // }

        return strpos($str, 'not') === 0 ? 
                $str : 'not ' . $str;
    }
}