<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q32
{
    /**
     * 引数として与えられた文字列の先頭、２番目の文字が'x'であればそれを削除し、
     * 返す。そうでない場合は引数の文字をそのまま返す
     * 例：
     * 　withoutX2("xHi") → "Hi"
     * 　withoutX2("Hxi") → "Hi"
     * 　withoutX2("Hi") → "Hi"
     * 
     * @param string $str
     * 
     * @return string 上記の処理によって作成される文字列
     */
    public function withoutX2(string $str) : string
    {
        $len = strlen($str);

        // 文字列長が 0の場合はそのまま返す
        if ($len < 1) {
            return $str;
        }
        
        // 先頭が 'x' でないなら １文字目を取得
        $result = '';
        if ($str[0] !== 'x') {
            $result .= $str[0];
        }

        // 文字列長が1の場合はここまでの値を返す
        if ($len == 1) {
            return $result;
        }
        
        // 2 文字目が 'x' なら3文字目以降を取得
        if ($str[1] === 'x') {
            $result .= substr($str, 2);
        } else {
            $result .= substr($str, 1);
        }
        
        return $result;
    }
}