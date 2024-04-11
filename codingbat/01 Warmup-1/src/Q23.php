<?php

class Q23
{
    /**
     * 引数として、文字列が与えられた場合、最初の2文字から成る文字列を返します（存在する場合）。
     * ただし、最初の文字が 'o' の場合のみ含め、2番目の文字が 'z' の場合のみ含めます。
     * したがって、"ozymandias" は "oz" を返します。
     * 
     * 例：startOz("ozymandias") → "oz"
     * 　　startOz("bzoo") → "z"
     * 　　startOz("oxx") → "o"
     * 
     * @param string $str 文字列
     * 
     * @return 上のルールにしたがって文字列を返す
     * 
     */
    public function startOz(String $str) : string
    {
        return "";
    }
}