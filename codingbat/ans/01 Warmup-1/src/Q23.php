<?php

class Q23
{
    /**
     * 引数(文字列)の最初の2文字から文字列を作って返す。
     * 引数(文字列)が1文字の場合は1文字のみ処理する
     * 1文字目が'o'なら'o'、2文字目が'z'なら'z'を返す
     * それ以外の文字は処理しない
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
        // if (strpos($str, 'oz') === 0) {
        //   return 'oz';
        // } elseif (strpos($str, 'o') === 0) {
        //   return 'o';
        // } elseif (strlen($str) >= 2) {
        //   if (strpos($str, 'z', 1) === 1) {
        //     return 'z';
        //   }
        // }

        $ret = "";

        if (substr($str, 0, 1) == 'o') {
          $ret = 'o';
        }

        if (substr($str, 1 , 1) == 'z') {
          $ret .= 'z';
        }

        return $ret;
    }
}