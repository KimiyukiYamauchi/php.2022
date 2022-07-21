<?php

class Q22
{
    /**
     * 引数(文字列)が"mix"で始まっていればtrueを返す
     * 但し、mの位置の文字は任意の文字でOK
     * 例："pix","9ix"など
     * 　mixStart("mix snacks") → true
     * 　mixStart("pix snacks") → true
     * 　mixStart("piz snacks") → false
     * 
     * @param string $str 文字列
     * 
     * @return 引数(文字列)が"mix"で始まっていればtrueを返す
     * 　　　　但し、mの位置の文字は任意の文字でOK
     * 
     */
    public function mixStart(string $str) : bool
    {
      // if (substr($str, 1, 2) == 'ix') {
      //   return true;
      // }

      
      // if (preg_match('/^.ix/', $str)) {
      //   return true;
      // }
      // return false;

        return preg_match('/^.ix/', $str);
    }
}