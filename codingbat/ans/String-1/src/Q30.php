<?php

use phpDocumentor\Reflection\Types\Boolean;

class Q30
{
    /**
     * 引数として２つの文字列が与えられ、１つ目の引数の文字列(以下strという)の先頭部分と
     * ２つめの文字列(以下wordという)が一致する場合、strの先頭部分を返す
     * そうでない場合は空文字を返す
     * 但し、先頭１文字目は一意する必要がない
     * 例えばstrが'hippo'に対してwordが'hi'の場合は'hi'を返す
     * また、strが'hippo'に対してwordが'xip'の場合は'hip'を返す
     * wordは１文字以上である
     * 例：
     * 　startWord("hippo", "hi") → "hi"
     * 　startWord("hippo", "xip") → "hip"
     * 　startWord("hippo", "i") → "h"
     * 
     * @param string $str
     * @param string $word
     * 
     * @return string 上記の処理によって作成される文字列
     */
    public function startWord(string $str, string $word) : string
    {
       if(strlen($word) > strlen($str)) { // wordの長さがstrよりも長い場合は、空の文字列を返す
            return "";
        }
        $str_start = substr($str, 1); // strの先頭１文字目を除いた文字列を取得する
        $word_start = substr($word, 1); // wordの先頭１文字目を除いた文字列を取得する
        if($word_start == substr($str_start, 0, strlen($word) - 1)) { // strの先頭部分とwordの先頭部分が一致する場合は、strの先頭部分を返す
            return substr($str, 0, strlen($word));
        } else { // 上記以外の場合は、strの先頭１文字目を返す
            // return substr($str, 0, 1);
            return '';
        }
    }
}