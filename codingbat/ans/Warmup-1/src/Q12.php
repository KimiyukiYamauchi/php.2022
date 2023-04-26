<?php

class Q12
{
    /**
     * 引数(文字列)の先頭から3文字を3回結合した文字列を返す関数
     * 引数が3文字に満たない場合はそれを3回結合する
     * 例：
     * 　front3("Java") → "JavJavJav"
     * 　front3("Chocolate") → "ChoChoCho"
     * 　front3("abc") → "abcabcabc"
     * 
     * @param string $str 対象の文字列
     * 
     * @return 引数(文字列)の先頭から3文字を3回結合した文字列を返す
     *         引数が3文字に満たない場合はそれを3回結合する
     * 
     */
    public function front3(String $str) : string
    {
      
      $f3 = $str;

      if (strlen($str) >= 3) {
        $f3 = substr($str, 0, 3);
      }

      return$f3 . $f3 . $f3;

      // return strlen($str) >= 3 ?
      //   substr($str, 0, 3) . substr($str, 0, 3) . substr($str, 0, 3) :
      //   $str . $str . $str;
    }
}