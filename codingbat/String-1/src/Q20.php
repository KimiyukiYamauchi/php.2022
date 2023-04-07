<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q20
{
    /**
     * 引数として与えられた文字列のindexが0または1の位置に"bad"があればtrueを返す
     * "badxxx"、"xbadxx"はtrue、"xxbadxx"はfalseを返す
     * 与えられる文字列の文字列長は任意。空文字の場合もある
     * 例：
     * 　hasBad("badxx") → true
     * 　hasBad("xbadxx") → true
     * 　hasBad("xxbadxx") → false
     * 
     * @param string $str
     * 
     * @return string 上記の判定の結果のbool値を返す
     * 
     */
    public function hasBad(string $str) : bool
    {
        return '-1';
    }
}