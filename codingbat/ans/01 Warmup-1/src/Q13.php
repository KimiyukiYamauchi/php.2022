<?php

class Q13
{
    /**
     * 引数(文字列)の末尾の文字を引数の文字列の前後に追加した文字列を返す関数
     * 引数の文字列は1文字以上
     * 例：
     * 　backAround("cat") → "tcatt"
     * 　backAround("Hello") → "oHelloo"
     * 　backAround("a") → "aaa"
     * 
     * @param string $str 対象の文字列
     * 
     * @return 引数(文字列)の末尾の文字を引数(文字列)の前後に追加した文字列を返す
     * 
     */
    public function backAround(String $str) : string
    {
      $endchar = substr($str, -1);        // 末尾の文字を取得
      return $endchar . $str . $endchar;

    }
}