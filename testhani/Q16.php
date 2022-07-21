<?php

class Q16
{
    /**
     * 引数(文字列)が'hi'から始まっていればtrue、それ以外はfalseを返す関数
     * 例：
     * 　startHi("hi there") → true
     * 　startHi("hi") → true
     * 　startHi("hello hi") → false
     * 
     * @param string $str 文字列
     * 
     * @return 引数(文字列)が'hi'から始まっていればtrue、それ以外はfalseを返す
     * 
     */
    public function startHi(string $str) : bool
    {
      // if (str_starts_with($str, 'hi')) {
      //   return true;
      // }
      //   return false;

      return str_starts_with($str, 'hi');

    }
}